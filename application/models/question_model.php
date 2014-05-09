<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends CI_Model {
    var $tot_time;

    public function __construct() {
        $this->tot_time = 60*60*2;
        mb_regex_encoding('UTF-8');
        mb_internal_encoding("UTF-8"); 
    }

    public function startEvent() {
        if (!$this->user_model->startEvent()){
            return FALSE;
        }

        $problem = $this->event_model->random(25);
        
        // $sql = 'DELETE FROM event WHERE uid=?';
        // $this-> db->query($sql, array($this->user_model->uid));

        sort($problem);

        $sql = "INSERT INTO {$this->db->dbprefix('event')}(uid, problem) VALUES(?, ?)";
        $this->db->query($sql, array($this->user_model->uid, json_encode($problem)));

        $data = $this->db->where_in('id', $problem)->get('problem')->result();

        foreach ($data AS &$value) {
            if ($value->pic_extra == 1)
            {
                $value->pic_extra_link = base_url("index.php/Event/getProblemPic/fileExtraPicture/{$value->pic_link}");
            }
            $value->pic_link = base_url("index.php/Event/getProblemPic/fileMainPicture/{$value->pic_link}");
            $value = $this->process_problem($value);
            unset($value->answer);
            unset($value->title);
        }
        return $data;
    }

    public function process_problem($problem) {
        switch($problem->type) {
        case 0:
            //单选题
            $problem->option = json_decode($problem->option);
            break;
        case 1:
            //多选题
            //暂时没有这个类型
            $problem->option = json_decode($problem->option);
            break;
        case 2:
            //判断题
            unset($problem->option);
            break;
        case 3:
            //填空题
            $problem->option = explode('；', $problem->answer);
            $problem->option = sizeof($problem->option);
            break;
        }
        return $problem;
    }

    public function getProblemInfo($pid) {
        $sql = "SELECT * FROM {$this->db->dbprefix('problem')} WHERE id=?";
        $data = $this->db->query($sql, array($pid))->row();
        return $data;
    }

    public function get_online_question_by_mark($mark) {

    }

    public function get_offline_question_by_mark($mark) {

    }
    public function submit($data) {
        $sql = "SELECT *, UNIX_TIMESTAMP(start_time) AS start_timestamp FROM {$this->db->dbprefix('event')} WHERE uid=? ORDER BY start_time DESC LIMIT 1";
        $pro = $this->db->query($sql, array($this->user_model->uid))->row();

        if ($pro == NULL) {
            $this->common_model->set_error('您还没有开始过考试，不可提交。如果经常发生这个错误，请联系求是潮');
            return FALSE;
        }

        $sql = "INSERT INTO {$this->db->dbprefix('submit')}(stuid, pro, answer, state) VALUES(?, ?, ?, 0);";
        $this->db->query($sql, array($this->user_model->uid, $pro->problem, $data));
        $id = $this->db->insert_id();

        $data = json_decode($data);
        if ($data == FALSE) {
            $this->common_model->set_error('数据解析失败，请重做或联系求是潮： tech@myqsc.com');
            return FALSE;
        }

        if (mktime() - $pro->start_timestamp > $this->tot_time + 40) {
            //超过了题目提交时间
            $this->common_model->set_error('超过提交时间');
            return FALSE;
        }

        $sql = "SELECT * FROM {$this->db->dbprefix('submit')} WHERE state=1 AND stuid=? AND UNIX_TIMESTAMP(time_submit) > ?";
        if ($this->db->query($sql, array($this->user_model->uid, $pro->start_timestamp))->num_rows() != 0) {
            //这个提交过了
            $this->common_model->set_error('这次答题已经提交过了，请重新开始');
            return FALSE;
        }

        $sql = "UPDATE {$this->db->dbprefix('submit')} SET state = 1 WHERE id=?";
        $this->db->query($sql, array($id));

        $pro_id = array();
        foreach($data AS &$value) {
            $pro_id[] = $value->id;
        }
        $problem = $this->db->where_in('id', $pro_id)->get('problem')->result();

        $wrong_answers = array();
        //保存做错了的题目

        $point = 0;
        for ($i = 0; $i != sizeof($data); ++$i) {
            $p = $this->check_problem($data[$i], $problem[$i]);
            if ($p == FALSE) {
                $wrong_answers[] = array(
                    'id'        => $problem[$i]->id,
                    'answer'    => $problem[$i]->answer
                    );
            } else {
                $point += 2;
            }
        }

        $sql = "UPDATE {$this->db->dbprefix('user')} SET max_score=? WHERE uid=? AND max_score<? LIMIT 1";
        $this->db->query($sql, array($point, $this->user_model->uid, $point));

        return array('point' => round($point), 'wrong' => $wrong_answers);
    }

    private function check_problem($value, $problem) {
        if (!isset($value->answer)) 
            return FALSE;

        $answer = $value->answer;
        switch($problem->type) {
        case 0:
            //单选题
            if (!is_array($answer) || sizeof($answer) != 1) {
                //如果不是数组或者答案数量不是1个，就错误啦！
                return FALSE;
            }

            if ((int) $answer[0] == $problem->answer)
                return TRUE;
            return FALSE;

            break;

        case 1:
            //多选题
            if (!is_array($answer)) {
                return FALSE;
            }

            $problem->answer = json_decode($problem->answer);

            sort($answer);
            sort($problem->answer);

            if ($answer == $problem->answer) {
                //两个数组一样
                return TRUE;
            }

            return FALSE;

        case 2:
            //判断题
            if (mb_strlen($answer) == 0 || mb_strlen($answer) > 5)
                return FALSE;


            $answer = (int) $answer;
            if ($answer == (int) $problem->answer) {
                return TRUE;
            }
            return FALSE;

        case 3:
            //填空题
            foreach ($answer AS &$value) {
                $value = str_replace(' ', '', $value);
            }

            $point = 0;
            $problem->answer = explode("；", $problem->answer);
            foreach ($problem->answer AS &$value) {
                $value = str_replace(' ', '', $value);
            }

            if (sizeof($problem->answer) != sizeof($answer))
                return 0;

            $each_point = (double) 1 / sizeof($problem->answer);
            foreach ($problem->answer AS &$value) {
                if (in_array($value, $answer)) {
                    $point += $each_point;
                }
            }
            return $point;
        }
        return FALSE;
    }



}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */