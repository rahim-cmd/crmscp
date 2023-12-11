<?php
class Warehouse extends CI_Controller
{

    public function __Consturct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('add_warehouse');
    }
    public function insertwhouse()
    {
        $this->form_validation->set_rules('wname','Warehouse Name','required|min[4]');
        $this->form_validation->set_rules('wadd','Warehouse Address','required|min[5]');
        $this->form_validation->set_rules('wphone','Warehouse Phone','required');
        $this->form_validation->set_rules('wemail','Warehouse Email','required|valid_email');
        $this->form_validation->set_rules('wfax','Warehouse Fax','numeric');
        $this->form_validation->set_rules('wagent','Warehouse Agent','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run()==true)
        {
            $this->load->model('warehousemodel');
            $this->warehousemodel->addwhouse();
            echo '<script>alert("add successfull")</script>';
            redirect('show_warehouse','refresh');
        }
        else{
            
                $this->load->view('warehouse_list');
                        
        }

        
        
    }
    public function showwarehouse()
    {
        $this->load->model('warehousemodel');
        $data['cmd']=$this->warehousemodel->listwarehouse();
        $this->load->view('warehouse_list',$data);
    }
    public function editwarehouse($id)
    {
        $this->load->model('warehousemodel');
        $data['row']=$this->warehousemodel->edithouse($id);
        $this->load->view('modi_warehouse',$data);
    }
    public function updatewarehouse($id)
    {
        $this->load->model('warehousemodel');
        $data['row']=$this->warehousemodel->updatehouse($id);
        
        redirect('show_warehouse','refresh');
        
                
    }
    public function trashwarehouse($id)
    {
        $this->load->model('warehousemodel');
        $data['row']=$this->warehousemodel->trashhouse($id);
        
        redirect('show_warehouse','refresh');
        
                
    }
    
}


?>