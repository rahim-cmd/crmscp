<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bank extends CI_Controller
{
    public function __Construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    public function index()
    {
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('cardinfo/cardinfo');
        $this->load->view('footer');
    }
    public function showinfo()
    {
        $this->load->model('cardinfo');
        $data['cmd']=$this->cardinfo->showinfo();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('cardinfo/showcardinfo',$data);
        $this->load->view('footer');

    }
    public function addcardinfo(){

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('cno','Card Number','required|numeric');
        $this->form_validation->set_rules('cvv','CVV','required|numeric|min_length[3]|max_length[4]');
        $this->form_validation->set_rules('exp','Expiration','required');
        $this->form_validation->set_rules('billingadd','Billing Address','required');
        if($this->form_validation->run()==TRUE)
        {
            $data=[
                'c_name'=>$this->input->post('name'),
                'c_number'=>$this->input->post('cno'),
                'c_cvv'=>$this->input->post('cvv'),
                'c_exp'=>$this->input->post('exp'),
                'c_billing_add'=>$this->input->post('billingadd'),
                'updatedBy'=>$this->session->userdata('email'),
                'cutime'=>date('Y-m-d h:i:s')

            ];
            $this->db->insert('cardinfo',$data);
            redirect('showcardinfo','refresh');
        }else{
            $this->load->view('topbar');
            $this->load->view('sidebar');
            $this->load->view('cardinfo/cardinfo');
            $this->load->view('footer');
        }
        

       
        
        
    }
    public function editcardinfo($id)
    {
        $this->load->model('cardinfo');
        $data['row']=$this->cardinfo->editinfo($id);
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('cardinfo/modi_cardinfo',$data);
        $this->load->view('footer');

    }
    public function updatecardinfo($id){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('cno','Card Number','required|numeric');
        $this->form_validation->set_rules('cvv','CVV','required|numeric|min_length[3]|max_length[4]');
        $this->form_validation->set_rules('exp','Expiration','required');
        $this->form_validation->set_rules('billingadd','Billing Address','required');
        if($this->form_validation->run()==TRUE)
        {
        $data=[
            'c_name'=>$this->input->post('name'),
            'c_number'=>$this->input->post('cno'),
            'c_cvv'=>$this->input->post('cvv'),
            'c_exp'=>$this->input->post('exp'),
            'c_billing_add'=>$this->input->post('billingadd'),
            'cutime'=>date('Y-m-d h:i:s')
        ];

        $this->db->update('cardinfo',$data,array('id'=>$id));
        
        redirect('showcardinfo','refresh');
    }else{
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('cardinfo/cardinfo');
        $this->load->view('footer');
    }
        
        
    }
    public function delcardinfo($id)
    {
        
        $this->db->delete('cardinfo',array('id'=>$id));
        redirect('showcardinfo','refresh');

               
    }
}