<?php
class Warehousemodel extends CI_model
{
    
    public function addwhouse()
    {
        $wname=$this->input->post('wname');
        $wadd=$this->input->post('wadd');
        $wphone=$this->input->post('wphone');
        $wemail=$this->input->post('wemail');
        $wfax=$this->input->post('wfax');
        $wagent=$this->input->post('wagent');

        $data= array(
            'w_name'=>$wname,
            'w_add'=>$wadd,
            'w_phone'=>$wphone,
            'w_email'=>$wemail,
            'w_fax'=>$wfax,
            'w_agent'=>$wagent,
            'updatedBy'=>$this->session->userdata('email'), 
            'cutime'=> date('Y-m-d h:i:s')
        );
        $this->db->insert('warehousedetails', $data);
        
        redirect('show_warehouse','refresh');
        

    }
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
            'cutime'=> date('Y-m-d h:i:s')
        );
        $data=$this->db->update('warehousedetails',$data,array('id'=>$id));
        
        redirect('show_warehouse','refresh');
        
       
          
    }
    public function trashhouse($id)
    {
        $this->db->delete('warehousedetails',array('id'=>$id));
        redirect('show_warehouse','refresh');
    }

    
}

?>