<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 
{
    function check_user_and_password_online($username)
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

    function check_user_and_password_offline($username)
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
}
