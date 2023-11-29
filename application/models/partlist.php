<?php
class Partlist extends CI_model
{

    
    public function partshow()
    {
        $data=$this->db->get('inventory');
        return $data->result();
    }
    public function editpartlist($id)
    {
        $data=$this->db->get_where('inventory',array('id'=>$id));
        return $data->row();
    }
    
    public function delpartlist($id)
    {
        $data=$this->db->delete('inventory',array('id'=>$id));
        return true;
    }
}

?>