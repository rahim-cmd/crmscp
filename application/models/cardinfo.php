<?php

class Cardinfo extends CI_model
{
    public function showinfo()
    {
        $data=$this->db->get('cardinfo');
        return $data->result();
    }
    public function editinfo($id)
    {
        $data=$this->db->get_where('cardinfo',array('id'=>$id));
        return $data->row();
    }
}