<?php

class Userlist extends CI_Model {

    public $email;
    public $password;
    public $name;
    public $admin;
    public $cutime;
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
    public function insert_entry()
    {
            $this->email    = $_POST['email']; // to insert data into invoice user table
            $this->password  = $_POST['password'];
            $this->name  = $_POST['name'];
            $this->admin  = $_POST['role'];
            $this->cutime = date('Y-m-d h:i:s');
            $this->db->insert('users', $this);
            redirect(base_url().'adduser/showuser');
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
        $this->admin=$_POST['role'];
        $this->cutime     = date('Y-m-d h:i:s');
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