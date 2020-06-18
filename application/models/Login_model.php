<?php

class Login_model extends CI_Model
{
    public function login($data)
    {
        $query = $this->db->get_where('users', array('email' => $data['email'], 'password' => $data['password']));

        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function user_info($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));

        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}