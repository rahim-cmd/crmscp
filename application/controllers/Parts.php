<?php
defined('BASEPATH') OR exit('DIRECT ACCESS PROHIBITED');

class Parts extends CI_Controller
{

    public function index()
    {
        $this->load->view('partform');
    }

    public function addPart()
    {
        $data=array(
            'p_name'=>$this->input->post('pname'),
            'p_qty'=>$this->input->post('pqty'),
            'price'=>$this->input->post('price'),
            'p_trim'=>$this->input->post('ptrim'),
        );
        $this->db->insert('inventory',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
		redirect('showallparts','refresh');
    }
    public function showparts()
    {
        $this->load->model('partlist');
        $dt['parts']=$this->partlist->partshow();
        $this->load->view('showpartslist',$dt);
    }

    public function editparts($id)
    {
        $this->load->model('partlist');
        $data['row']=$this->partlist->editpartlist($id);
        $this->load->view('modipartslist',$data);
    }

    public function updateparts($id)
    {
        $data=array(
            'p_name'=>$this->input->post('pname'),
            'p_qty'=>$this->input->post('pqty'),
            'price'=>$this->input->post('price'),
            'p_trim'=>$this->input->post('ptrim'),
        );
        $this->db->update('inventory',$data,array('id'=>$id));
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
		redirect('showallparts','refresh');
    }

    public function deleteparts($id)
    {
        $this->load->model('partlist');
        $this->partlist->delpartlist($id);
        
        redirect('showallparts','refresh');
        
    }
}