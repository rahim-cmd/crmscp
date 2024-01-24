<?php
defined('BASEPATH') OR exit('DIRECT ACCESS PROHIBITED');

class Users extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('userlist');
    }    
    
    public function index()
    {
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('user/add_user');
        $this->load->view('footer');
    }

    public function newuser()
    {
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role','Role','required');
        $this->form_validation->set_rules('sudoname','Sudo Name','required');
        if($this->form_validation->run())
        {
            $data=array(
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password'),
                'name'=>$this->input->post('name'),
                'role'=>$this->input->post('role'),
                'sudoname'=>$this->input->post('sudoname'),
                
            );

                $status=$this->db->insert('users', $data);
                if($status == true){

                    echo "<script>alert('Data Inserted')</script>";
                    $this->showallusers();
                }else{
                    echo "<script>alert('Data Not Inserted')</script>";
                    $this->index();
                }
                
            
        }
        else
        {
            $this->index();
        }
    }

    public function showuser()
    {
        
        
        $data['qury']=$this->userlist->get_entries();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('user/userlist',$data);
        $this->load->view('footer');
    }

    public function edituser($id){
        
        $data['row']=$this->userlist->edit_entry($id);
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('user/update_user',$data);
        $this->load->view('footer');
    }
    public function updateuser($id)
    {

        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role','Role','required');
        $this->form_validation->set_rules('sudoname','Sudo Name','required');
        if($this->form_validation->run())
        {
            
            $data['row']=$this->userlist->update_record($id);
            redirect('showuser','refresh');
        }
        else
        {
            $this->load->view('topbar');
            $this->load->view('sidebar');
            $this->load->view('user/add_user');
            $this->load->view('footer');
        }
        
        
    }
    public function showallusers()
    {
     
        $data['qury']=$this->userlist->get_allentries();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('user/userlist',$data);
        $this->load->view('footer');
    }
    
    public function deleteuser($id)
    {
        
        $this->userlist->del_entry($id);
        redirect('showallusers','refresh');
        
    }
}