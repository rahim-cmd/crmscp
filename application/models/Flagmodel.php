<?php

class Flagmodel extends CI_model
{
    public function fetchDetails()
    {
        $this->db->select('*');
        $this->db->from('wareinfo');
        $this->db->join('flags','wareinfo.oid=flags.oidebay');
        $data=$this->db->get();
        return $data->result();
        
    }
}

?>