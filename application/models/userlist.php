<?php

class Userlist extends CI_Model {

    public $email;
    public $password;
    public $name;
    public $role;
    public $sudoname;
    
    public function __construct(){
        parent::__construct();
    }

    public function get_entries()
    {
        $query = $this->db->get_where('users',array('email' => $this->session->userdata('email')));//to get data from table
        return $query->result();

    }
    public function get_allentries()
    {
        $query=$this->db->get('users');
        return $query->result();
    }
    

    public function edit_entry($id)
    {
      
        $query=$this->db->where('id',$id);
        $query=$this->db->get('users');
        return $query->row();

    }

    public function update_record($id)
    {
        $this->email    = $_POST['email']; // to update data of invoice user table
        $this->password  = $_POST['password'];
        $this->name  = $_POST['name'];
        $this->role=$_POST['role'];
        $this->sudoname=$_POST['sudoname'];
        $this->db->update('users', $this,['id' => $id]);
    }
    public function del_entry($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        redirect('dashboard','refresh');
        
    }

}

?>