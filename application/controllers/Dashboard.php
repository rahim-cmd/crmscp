<?php
Class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['dat']=$this->db->get('orderinfo')->num_rows();

        $this->load->model('dashboardmodel');
        $data['rec']=$this->dashboardmodel->dateviceorders();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('dashboard',$data);
        $this->load->view('footer');
    }
}
?>