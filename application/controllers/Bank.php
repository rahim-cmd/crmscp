<?php
class Bank extends CI_Controller
{
    public function index()
    {
        $this->load->view('cardinfo');
    }
    public function showinfo()
    {
        $this->load->model('cardinfo');
        $data['cmd']=$this->cardinfo->showinfo();
        $this->load->view('showcardinfo',$data);

    }
    public function addcardinfo(){

        $data=[
            'c_name'=>$this->input->post('name'),
            'c_number'=>$this->input->post('cno'),
            'c_cvv'=>$this->input->post('cvv'),
            'c_exp'=>$this->input->post('exp'),
            'c_billing_add'=>$this->input->post('billingadd'),
            'cutime'=>date('Y-m-d h:i:s')
        ];

        $this->db->insert('cardinfo',$data);
        
        redirect('showcardinfo','refresh');
        
        
    }
    public function editcardinfo($id)
    {
        $this->load->model('cardinfo');
        $data['row']=$this->cardinfo->editinfo($id);
        $this->load->view('modi_cardinfo',$data);

    }
    public function updatecardinfo($id){

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
        
        
    }
    public function delcardinfo($id)
    {
        $this->db->delete('cardinfo',array('id'=>$id));
        
        redirect('showcardinfo','refresh');
        
    }
}