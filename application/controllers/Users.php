<?php
defined('BASEPATH') OR exit('DIRECT ACCESS PROHIBITED');

class Users extends CI_Controller{
    public function index(){
        $this->load->view('add_user');
    }

    public function newuser(){
        $this->load->model('userlist');
        $this->userlist->insert_entry();
        return true;
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
    public function updateuser($id){
        $this->load->model('userlist');
        $data['row']=$this->userlist->update_record($id);
        
        
        redirect('dashboard','refresh');
        
        
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