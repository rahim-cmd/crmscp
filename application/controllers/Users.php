<?php
defined('BASEPATH') OR exit('DIRECT ACCESS PROHIBITED');

class Users extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }    
    
    public function index()
    {
        $this->load->view('add_user');
    }

    public function newuser()
    {
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role','Role','required');
        if($this->form_validation->run())
        {
            $data=array(
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password'),
                'name'=>$this->input->post('name'),
                'role'=>$this->input->post('role'),
                'cutime'=>$this->cutime = date('Y-m-d h:i:s')
            );

                $this->db->insert('users', $data);
                redirect('showuser','refresh');
            
        }
        else
        {
            $this->load->view('add_user');
        }
    }

    public function showuser()
    {
        
        $this->load->model('userlist');
        $data['qury']=$this->userlist->get_entries();
        $this->load->view('userlist',$data);
    }

    public function edituser($id){
        $this->load->model('userlist');
        $data['row']=$this->userlist->edit_entry($id);
        $this->load->view('update_user',$data);
    }
    public function updateuser($id)
    {

        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role','Role','required');
        if($this->form_validation->run())
        {
        $this->load->model('userlist');
        $data['row']=$this->userlist->update_record($id);
        redirect('dashboard','refresh');
        }
        else
        {
            $this->load->view('add_user');
        }
        
        
    }
    public function showallusers()
    {
        $this->load->model('userlist');
        $data['qury']=$this->userlist->get_allentries();
        $this->load->view('userlist',$data);
    }
    
    public function deleteuser($id)
    {
        $this->load->model('userlist');
        $this->userlist->del_entry($id);
        
        redirect('showallusers','refresh');
        
    }
}