<?php
class LoginModel extends CI_model {
    public function fetchUserDetails($email,$password) {
        
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('users');
        if($query->num_rows()>0)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
}
?>