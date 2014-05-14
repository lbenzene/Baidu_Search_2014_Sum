<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 
{
    function check_user_and_password_online($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));
        $this->db->where('first_name','single');
        $query = $this->db->get('auth_user');
        if ($query->num_rows() > 0)
            return 1;
        else
            return 0;
    }

    function check_user_and_password_offline($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));
        $this->db->where('first_name','group');
        $query = $this->db->get('auth_user');
        if ($query->num_rows() > 0)
            return 1;
        else
            return 0;
    }

    function check_online_answer_time($username,$mark) 
    {
        $temp = 1;
        for ($i=1; $i<$mark+1; $i++)
            $temp*=2;
        $this->db->select('online');
        $this->db->where('username',$username);
        $this->db->where('first_name','single');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        if (($data['online'] & $temp) == $temp) 
            return 1; 
        else
            return 0;
    }

    function check_offline_answer_time($username,$mark) 
    {
        $temp = 1;
        for ($i=1; $i<$mark+1; $i++)
            $temp*=2;
        $this->db->select('offline');
        $this->db->where('username',$username);
        $this->db->where('first_name','group');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        if (($data['offline'] & $temp) == $temp) 
            return 1; 
        else
            return 0;
    }
    
    function finished_online_question($username, $mark)
    {
        $temp = 1;
        for ($i=1; $i<$mark+1; $i++)
            $temp*=2;
        $this->db->select('online');
        $this->db->where('username',$username);
        $this->db->where('first_name','single');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);

        $update_data = array(
                'online' => $data['online'] | $temp
            );

        $this->db->where('username',$username);
        $this->db->where('first_name','single');
        $query = $this->db->update('auth_user',$update_data);  
    }
    
    function finished_offline_question($username, $mark)
    {
        $temp = 1;
        for ($i=1; $i<$mark+1; $i++)
            $temp*=2;
        $this->db->select('offline');
        $this->db->where('username',$username);
        $this->db->where('first_name','group');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);

        $update_data = array(
                'offline' => $data['offline'] | $temp
            );
        
        $this->db->where('username',$username);
        $this->db->where('first_name','group');
        $query = $this->db->update('auth_user',$update_data);  
    }

    function add_score_online($username, $score)
    {
        $this->db->select('score_online');
        $this->db->where('username',$username);
        $this->db->where('first_name','single');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        
        $update_data = array(
                'score_online' => $data['score_online'] + $score
            );

        $this->db->where('username',$username);
        $this->db->where('first_name','single');
        $query = $this->db->update('auth_user',$update_data);        
    }

    function add_score_offline($username, $score)
    {
        $this->db->select('score_offline');
        $this->db->where('username',$username);
        $this->db->where('first_name','group');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        
        $update_data = array(
                'score_offline' => $data['score_offline'] + $score
            );

        $this->db->where('username',$username);
        $this->db->where('first_name','group');
        $query = $this->db->update('auth_user',$update_data);        
    }

    public function check_start_time($username,$mark) {
        $this->db->select('starttime'.$mark);
        $this->db->where('username',$username);
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        return $data['starttime'.$mark];
    }

    public function check_end_time($username,$mark) {
        $this->db->select('endtime'.$mark);
        $this->db->where('username',$username);
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        return $data['endtime'.$mark];
    }

    public function add_start_time($username,$mark) {
        $update_data = array(
                'starttime'.$mark  => strtotime(date('h:i:s'))
            );
        $this->db->where('username',$username);
        $this->db->update('auth_user',$update_data);
    }
    
    public function add_end_time($username,$mark) {
        $update_data = array(
                'endtime'.$mark  => strtotime(date('h:i:s'))
            );
        $this->db->where('username',$username);
        $this->db->update('auth_user',$update_data);
        ////////
        $this->db->select('time_sum,endtime'.$mark.',starttime'.$mark);
        $this->db->where('username',$username);
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        $update_data = array(
                'time_sum' => $data['time_sum'] + $data['endtime'.$mark] - $data['starttime'.$mark]
            );
        $this->db->where('username',$username);
        $query = $this->db->update('auth_user',$update_data);        
    }

    public function get_online_rank() {
        $this->db->select('id,username,score_online,time_sum');
        $this->db->where('first_name','single');
        $this->db->order_by('score_online','desc');
        $this->db->order_by('time_sum','asc'); 
        $query = $this->db->get('auth_user');
        $data = $query->result_array();
        return $data;
    }    

    public function get_offline_rank() {
        $this->db->select('id,username,score_offline,time_sum');
        $this->db->where('first_name','group');
        $this->db->order_by('score_offline','desc');
        $this->db->order_by('time_sum','asc'); 
        $query = $this->db->get('auth_user');
        $data = $query->result_array();
        return $data;
    }    
}
