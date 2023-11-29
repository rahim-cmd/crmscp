<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index() {

        if($this->session->userdata('email')=="")
        {
        $data['title']="STORE CAR PART";
        $this->load->view('login',$data);
        }else{
            $this->load->view('dashboard');
        }
           
    }
 
    public function auth() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == true) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('loginmodel');
            
            if($this->loginmodel->fetchuserdetails($email,$password))
            {
                $session_data=array('email'=>$email,'password'=>$password);
                $this->session->set_userdata($session_data);
                redirect(base_url().'login/enter');
            }
            else
            {
                $this->session->set_flashdata('error','Invalid Credentials Entered');;
                
                redirect(base_url('login'));
            }
            
           
            }
        else{
                
               redirect(base_url('login'));
                
            }
        
        
    }
    
    public function enter()
    {
        if($this->session->userdata('email')!='')
        {
            redirect(base_url('dashboard'));
        }
        else{

            redirect(base_url('login'));
        }
    }

    

	public function logout(){
        $this->session->unset_userdata('email');
		
		redirect(base_url('login')); # Login form 
    }
}

	
 