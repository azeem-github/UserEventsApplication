<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->database();
     
    }
    public function userreg()
        {
            if(isset($_POST['register'])){
               $this->form_validation->set_rules('username', 'Username', 'required');
               $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
               $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
               $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|min_length[5]');
            if($this->form_validation->run() == TRUE){
   
               $data = array(
                  
                  'username'=>$_POST ['username'],
                  'email'=>$_POST ['email'],
                  'password'=>md5($_POST ['password']),
                  'cpass'=>md5($_POST ['cpass'])
               );
               $this->db->insert('user', $data);
               $this->session->set_flashdata("success", "User account has been registered");
               redirect("user/userlog", "refresh");
            }
         }
        
      $this->load->view('userreg');
         }
         public function userlog()
         {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            if($this->form_validation->run() == TRUE) {
               //check user in database
      
      
               $email = $_POST['email'];
               $password= md5($_POST['password']);
      
               $this->db->select('*');
               $this->db->from('user');
               $this->db->where(array('email'=>$email, 'password' => $password));
               $query = $this->db->get();
      
               $user = $query->row();
            //if user exists
               if($user->email) {
               }else{
                  $this->session->set_flashdata("success", "No user Available With This Email");
                  redirect("user/userlog") ;
               }
                  //temporary message
                  $this->session->set_flashdata("success", "You are logged in");
      
                  $_SESSION['user_logged'] = TRUE;
                  $_SESSION['username'] = $user->username;
      
                  //redirect to profile
                  redirect("user/userevent", "refresh");
      
            }
          $this->load->view('userlog');
         }

         public function userevent()
         {
             
      if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
       
      } else{
         redirect('admin/adminlog');
      }
            if(isset($_POST['create'])){
               $this->form_validation->set_rules('event_id', 'Event Id', 'required|is_unique[events.event_id]');
               $this->form_validation->set_rules('status', 'Status', 'required');
            if($this->form_validation->run() == TRUE){ 
         $data = array(
                   'user_email_id' => $_SESSION['username'],
                  'event_id'=> $_POST ['event_id'],
                  'status'=> $_POST ['status']);
               $this->db->insert('events', $data);
               $this->session->set_flashdata("success", "success");
               redirect("user/viewevents", "refresh");
             }
             if(isset($_SESSION['username']) && $_SESSION['username'] != ''){

            
            } else{
               redirect('user/userlog');
            }
         }
      $this->load->view('userevent');
      }
    public function viewevents()
    {
      if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
       
      } else{
         redirect('admin/adminlog');
      }
        $this->load->view('viewevents');
    }
    
    public function logout()
    {
       $this->session->sess_destroy();
       //print_r($_SESSION);exit;
       redirect('user/userlog');
    }
   }
   ?>