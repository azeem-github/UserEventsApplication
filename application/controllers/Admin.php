<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
   public function __construct()
   {
       parent::__construct();
       $this->load->library('form_validation');
       $this->load->model('Admin_model');
    
   }
   public function index()
	{
        $this->load->view('home');
	}

   public function adminreg()
   {
      if(isset($_POST['register'])){
         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
         $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|min_length[5]');
      if($this->form_validation->run() == TRUE){

         echo "form validated";
         $data = array(
            'username'=>$_POST ['username'],
            'email'=>$_POST ['email'],
            'password'=>md5($_POST ['password']),
            'cpass'=>md5($_POST ['cpass'])
         );
         $this->db->insert('admin', $data);
         $this->session->set_flashdata("success", "Admin account has been registered");
         redirect("admin/adminlog", "refresh");
       }
       
   }
$this->load->view('adminreg');
   }
   public function adminlog()
   {
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
      if($this->form_validation->run() == TRUE) {
         //check user in database


         $email = $_POST['email'];
         $password= md5($_POST['password']);

         $this->db->select('*');
         $this->db->from('admin');
         $this->db->where(array('email'=>$email, 'password' => $password));
         $query = $this->db->get();

         $user = $query->row();
      //if user exists
         if($user->email) {
         }else{
               $this->session->set_flashdata("success", "No Admin Available With This Email");
               redirect("admin/adminlog") ;
            }
            //temporary message
            $this->session->set_flashdata("success", "You are logged in");

            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;

            //redirect to profile
            redirect("admin/admindata", "refresh");

         } 
      
    $this->load->view('adminlog');
   }
  
  
   public function admindata()
   {
    
      if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
      $this->load->view('admindata');
   
   } else{
      redirect('admin/adminlog');
   }
   }
  public function logout()
  {
     $this->session->sess_destroy();
     redirect('admin/adminlog');
  }
}
?>