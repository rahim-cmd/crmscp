<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller
{
    public function index()
    {
        $data['info']=$this->db->get('inventory')->result();
        $this->load->view('orderform',$data);
    }
    public function showorder()
    {
        $this->load->view('ordertable');
    }
}


?>