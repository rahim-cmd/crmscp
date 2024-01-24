<?php
class Ordermodel extends CI_model
{
    public function fetchSellingprice($id)
    {
        $data=$this->db->get_where('partlisting',array('id'=>$id));

        
        foreach($data->result() as $row )
        {
            $output=$row->sellingprice; 
        }

        return $output;
    }
    public function fetchTable($id)
    {
        $data=$this->db->get_where('partlisting',array('id'=>$id));
       
        
        foreach($data->result() as $row )
        {
            $output='<td>'.$row->listing.'</td>
            <td>'.$row->year.'</td><td>'.$row->make.'</td><td>'.$row->model.'</td>
            <td>'.$row->partname.'</td><td>'.$row->trim.'</td><td><img width="100px" height="100px" src='.base_url($row->photo).'></td>
            <td>SCP-'.$row->id.'</td><td>'.$row->sellingprice.'</td><td>'.$row->remarks.'</td>'; 
        }
        
        return $output;
    }

    public function showtablesdata()
    {
        $this->db->select('*');
        $this->db->from('orderinfo');
        $this->db->join('cardinfo','orderinfo.paidbycard = cardinfo.id');
        
        $this->db->join('flags','orderinfo.cebayid = flags.oidebay');

        return $this->db->get();
         
    }
//show full details about orders and flags
    public function showOrderFlagDetails($oid)
    {
        $this->db->select('*');
        $this->db->from('orderinfo');
        $this->db->join('flags','orderinfo.cebayid = flags.oidebay');
        $this->db->join('cardinfo','orderinfo.paidbycard=cardinfo.id');
        $this->db->join('partlisting','orderinfo.skuid = partlisting.id');
        $this->db->where('orderinfo.cebayid',$oid);
        return $this->db->get();

    }

    public function fetchwareinfo($oid)
    {
        $this->db->select('*');
        $this->db->from('wareinfo');
        $this->db->join('warehousedetails','wareinfo.w_name=warehousedetails.id');
        $this->db->where('wareinfo.oid',$oid);
         return $this->db->get();
    }

    public function editorders($id)
    {
        $this->db->select('*');
        $this->db->from('orderinfo');
        $this->db->join('partlisting','partlisting.id=orderinfo.skuid');
        $this->db->join('flags','flags.oidebay=orderinfo.cebayid');
        $this->db->join('cardinfo','cardinfo.id=orderinfo.paidbycard');
        $this->db->where('orderinfo.cebayid',$id);
        $data=$this->db->get();
        return $data->result();

    }

    
    
}

?>