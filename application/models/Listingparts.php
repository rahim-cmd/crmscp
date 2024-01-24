<?php
class Listingparts extends CI_model
{
    public function editpartlisted($id){

        $data=$this->db->get_where('partlisting',array('id'=>$id));
        return $data->result();
    }

    public function showlisting()
    {
        $data=$this->db->get('partlisting');
        return $data->result();
    }
}

?>