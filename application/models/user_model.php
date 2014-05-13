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
        $this->db->select('score');
        $this->db->where('username',$username);
        $this->db->where('first_name','single');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        
        $update_data = array(
                'score' => $data['score'] + $score
            );

        $this->db->where('username',$username);
        $this->db->where('first_name','single');
        $query = $this->db->update('auth_user',$update_data);        
    }

    function add_score_offline($username, $score)
    {
        $this->db->select('score');
        $this->db->where('username',$username);
        $this->db->where('first_name','group');
        $query = $this->db->get('auth_user');
        $data = $query->row_array(0);
        
        $update_data = array(
                'score' => $data['score'] + $score
            );

        $this->db->where('username',$username);
        $this->db->where('first_name','group');
        $query = $this->db->update('auth_user',$update_data);        
    }
}
