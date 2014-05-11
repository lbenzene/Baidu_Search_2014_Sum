<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends CI_Model 
{
     public function get_online_select_question_by_mark($mark) {
    	$this->db->select('id,problem,s_a,s_b,s_c,s_d')->order_by('id','inc');
    	$query = $this->db->get('online_problem_'.$mark.'_select');
    	$data = $query->result_array();
    	return $data;
    }

    public function get_online_blank_question_by_mark($mark) {
    	$this->db->select('id,problem')->order_by('id','inc');
    	$query = $this->db->get('online_problem_'.$mark.'_blank');
    	$data = $query->result_array();
    	return $data;
    }
    
    public function get_offline_select_question_by_mark($mark) {
    	$this->db->select('id,problem,s_a,s_b,s_c,s_d')->order_by('id','inc');
    	$query = $this->db->get('offline_problem_'.$mark.'_select');
    	$data = $query->result_array();
    	return $data;
    }

    public function get_offline_blank_question_by_mark($mark) {
    	$this->db->select('id,problem')->order_by('id','inc');
    	$query = $this->db->get('offline_problem_'.$mark.'_blank');
    	$data = $query->result_array();
    	return $data;
    }
    
    private function check_online_select_answer($mark,$check_data) {
        $this->db->select('answer')->order_by('id','inc');
        $query = $this->db->get('online_problem_'.$mark.'_select');
        $data = $query->result_array();
        $score = 0;
        for ($i=0; $i<count($check_data); $i++) {
            if ($data[$i]['answer'] == $check_data[$i]['answer']) $score++;
        }
        return $score;
    } 

    private function check_offline_select_answer($mark,$check_data) {
        $this->db->select('answer')->order_by('id','inc');
        $query = $this->db->get('offline_problem_'.$mark.'_select');
        $data = $query->result_array();
        $score = 0;
        for ($i=0; $i<count($check_data); $i++) {
            if ($data[$i]['answer'] == $check_data[$i]['answer']) $score++;
        }
        return $score;
    } 

    private function check_online_blank_answer($mark,$check_data) {
        $this->db->select('answer')->order_by('id','inc');
        $query = $this->db->get('online_problem_'.$mark.'_blank');
        $data = $query->result_array();
    	$score = 0;
        for ($i=0; $i<count($check_data); $i++) {
            if ($data[$i]['answer'] == $check_data[$i]['answer']) $score++;
        }
        return $score;
    }

    private function check_offline_blank_answer($mark,$check_data) {
        $this->db->select('answer')->order_by('id','inc');
        $query = $this->db->get('offline_problem_'.$mark.'_blank');
        $data = $query->result_array();
        $score = 0;
        for ($i=0; $i<count($check_data); $i++) {
            if ($data[$i]['answer'] == $check_data[$i]['answer']) $score++;
        }
        return $score;
    }
}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */