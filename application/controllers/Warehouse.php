<?php
class Warehouse extends CI_Controller
{
    public function index()
    {
        $this->load->view('add_warehouse');
    }
    public function insertwhouse()
    {
        $this->load->model('warehousemodel');
        $this->warehousemodel->addwhouse();
        echo '<script>alert("add successfull")</script>';
        redirect('dashboard','refresh');
        
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