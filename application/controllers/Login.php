<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __Construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
        $this->load->model('dashboardmodel');
         $this->load->model('loginmodel');
    }
    public function index()
    {

        if($this->session->userdata('email')=="")
        {
            $data['title']="Store Car Part";
            $this->load->view('login',$data);
        }else{

                        $data['dat']=$this->db->get('orderinfo')->num_rows();
                        $data['rec']=$this->dashboardmodel->dateviceorders();
                        $this->load->view('topbar');
                        $this->load->view('sidebar');
                        $this->load->view('dashboard',$data);
                        $this->load->view('footer');
                }
                 
    } 
 
    public function auth() {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        
        if ($this->form_validation->run() == true) 
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
          
           $userExist=$this->loginmodel->fetchuserdetails($email,$password);
            
            if($userExist)
            {
                $session_data=array(
                    'email'=>$userExist->email,
                    'password'=>$userExist->password,
                    'name'=>$userExist->name,
                    'role'=>$userExist->role,
                    'sudoname'=>$userExist->sudoname,
                );
                        $uid=$session_data['email'];
                        $this->session->set_userdata($session_data);
                        $this->index();
                        $userData=array(
                            'uid'=>$uid,
                            'date'=>date('Y-m-d h:i:s'),
                            'ipaddress'=>$this->input->ip_address(),
                            'device'=>$this->agent->platform(),
                        );

                        $this->db->insert('loggedin_users',$userData);
                        
                        redirect('dashboard','refresh');

                
                
            }
            else
            {
                
                $this->load->view('login');
               
            }
            
           
        }
       
        
        
    }
    
    public function logout()
    {
        
        $this->session->unset_userdata('email');
		redirect(base_url('login')); # Login form 
    }

    
}

	
 