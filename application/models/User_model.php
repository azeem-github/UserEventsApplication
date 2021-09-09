<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function save($userdata){
        $this->db->insert('user', $userdata);
        return $this->db->insert_id();
    }

    public function login($email, $password)
	{
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user');

        if($query->num_rows() == 1){
            return $query->row();
        }
        return false;
	}
    public function userevent()
    {
     $email = $this->session->userdata('username');
    $data = $this->db->get_where('events', array('user_email_id'=>$email))->result_array();
    return $data;
    }
    public function eventd($eventdata)
    {
        $this->db->insert('events',$eventdata);
        return $this->db->insert_id();
    }
    
}