<?php
class Dashboardmodel extends CI_model
{
    public function dateviceorders()
    {
        $date=date('Y-m-d ');
        $this->db->where('date',$date);
        $records=$this->db->get('orderinfo');
        if($records->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}