<?php
defined('BASEPATH') OR exit('DIRECT ACCESS PROHIBITED');

class Parts extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }    
    public function index()
    {
        $this->load->view('partform');
    }

    public function addPart()
    {
                
        $this->form_validation->set_rules('pname','Part Name','required');
        $this->form_validation->set_rules('pqty','Part Quantity','required');
        $this->form_validation->set_rules('price','Part Price','required');
        if($this->form_validation->run())
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
        }else{
            
            $this->load->view('partform');
            
        }
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