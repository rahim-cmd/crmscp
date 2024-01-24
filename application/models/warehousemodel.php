<?php
class Warehousemodel extends CI_model
{
    
    
    public function listwarehouse()
    {
        $data=$this->db->get('warehousedetails');
        return $data->result();
    }
    public function edithouse($id)
    {
        $data=$this->db->get_where('warehousedetails',array('id'=>$id));
        return $data->row();
    }
    public function updatehouse($id)
    {
        $wname=$this->input->post('wname');
        $wadd=$this->input->post('wadd');
        $wphone=$this->input->post('wphone');
        $wemail=$this->input->post('wemail');
        $wfax=$this->input->post('wfax');
        $wagent=$this->input->post('wagent');
        $status=$this->input->post('status');
        $data= array(
            'w_name'=>$wname,
            'w_add'=>$wadd,
            'w_phone'=>$wphone,
            'w_email'=>$wemail,
            'w_fax'=>$wfax,
            'w_agent'=>$wagent,
            'status'=>$status,
            'updatedBy'=>$this->session->userdata('email'),
            'cutime'=> date('Y-m-d h:i:s'),
        );
        $this->db->where('id',$id);
        $this->db->update('warehousedetails',$data);
           
          
    }
    public function trashhouse($id)
    {
        $this->db->delete('warehousedetails',array('id'=>$id));
        redirect('show_warehouse','refresh');
    }

    public function fetchTable($oid)
    {
        $this->db->select('*');
        $this->db->from('orderinfo');
        $this->db->join('partlisting','orderinfo.skuid=partlisting.id');
        $this->db->where('cebayid',$oid);
        $data= $this->db->get();
        
       if($data->result() > 0)
       {
        $output="";
        foreach($data->result() as $row )
        {
            $temprice=($row->sellingprice - $row->ebayfees - $row->marketingfees);
            $max= ($temprice*30)/100;
            $min=($temprice*20)/100;
            $maxprice=$max + $temprice;
            $minprice=$min+$temprice;

            $output.='<td>'.$row->date.'</td>'.'<td>'.ucwords($row->custname).'</td><td>'.ucwords($row->cadd).'</td><td>'.$row->cebayid.'</td><td>SCP-'.$row->skuid.'</td>
            <td>'.ucwords($row->listing).'</td><td>'.$row->year.'</td><td>'.$row->make.'</td><td>'.ucwords($row->model).'</td><td>'.ucwords($row->partname).'</td><td>'.ucwords($row->trim).'</td><td><img width="100px" height="100px" src='.base_url($row->photo).'></td>
            <td>'.$minprice.'</td><td>'.$maxprice.'</td>'.'<td>'.$row->shipbydate.'</td>'; 
        }
        return $output;
    }else{

        echo "<script>alert('Nothing Found')</script>";
    }
    }

    //show warehouse info for orders
    public function showplacedorders()
    {
        $this->db->select('*');
        $this->db->from('wareinfo');
        $this->db->join('warehousedetails','wareinfo.w_name=warehousedetails.id');
        $data=$this->db->get();
        return $data;


    }
    public function checkwareorder($id){

        $data=$this->db->get_where('wareinfo',array('oid'=>$id))->row();

        $msg="Order already executed Please select some other order id!";

        if($data)
        {
            
           echo $msg;
            
             
        }

        
    }

    public function fetchdataforemail($id)
    {
        $this->db->select('*');
        $this->db->from('wareinfo');
        $this->db->join('warehousedetails','wareinfo.w_name=warehousedetails.id');
        $this->db->join('orderinfo','orderinfo.cebayid=wareinfo.oid');
        $this->db->join('cardinfo','orderinfo.paidbycard=cardinfo.id');
        $this->db->join('partlisting','orderinfo.skuid=partlisting.id');
        $this->db->where('oid',$id);
        $data=$this->db->get();
        if($data->result() > 0){

            return $data->result();
        }else{

            return "Nothing found";
        }
    }
    public function showorderdata()
    {
        $this->db->select('*');
        $this->db->from('orderinfo');
        $this->db->join('flags','orderinfo.cebayid=flags.oidebay');
        $this->db->where('flags.under_process','under_process');
        $result=$this->db->get();
        if($result->result()> 0)
        {
            return $result;
        }
        else
        {
            return "Nothing Found";
        }
    }
    public function chkInventory($oid)
    {
        $this->db->select('*');
        $this->db->from('orderinfo');
        $this->db->join('partlisting','orderinfo.skuid=partlisting.id');
        $this->db->join('inventory','partlisting.partname=inventory.p_name');
        $this->db->where('orderinfo.cebayid',$oid);
        $data=$this->db->get()->result();
        $output="";

        if($data)
        {
           
        
            foreach($data as $row)
            {
                $output.= "Part Name: " .$row->p_name;
                $output.= "&nbsp Quantity: " .$row->p_qty;
                $output.= "&nbsp Price: " .$row->price;
                
            }
        
        }
        else
        {
            $output.= "Part is not in Inventory! Find Other Warehouses";
        }

        return $output;
       
    }
    public function  adjustinventory($oid)
    {
        $this->db->select('*');
        $this->db->from('orderinfo');
        $this->db->join('partlisting','orderinfo.skuid=partlisting.id');
        $this->db->join('inventory','partlisting.partname=inventory.p_name');
        $this->db->where('orderinfo.cebayid',$oid);
        $data=$this->db->get()->result();
        if($data > 0)
        {
            foreach($data as $row)
            {
                $new_qty=$row->p_qty - 1;
                $this->db->set('p_qty',$new_qty);
                $this->db->where('p_name',$row->p_name);
                $this->db->update('inventory');
            }
        }
    }

    
}

?>