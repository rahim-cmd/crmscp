<?php
class Parts extends CI_Controller
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('partlist');
		$this->load->helper('form');
        $this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('topbar');
		$this->load->view('sidebar');
		$this->load->view('parts/addparts_form');
		$this->load->view('footer');


	}
	public function addparts()
	{
		$this->form_validation->set_rules('partname','Part Name','required');
		$this->form_validation->set_rules('quantity','Quantity','required');
		$this->form_validation->set_rules('price','Price','required|numeric');
		if($this->form_validation->run()){

			$data=array(
				'p_name'=>$this->input->post('partname'),
				'p_qty'=>$this->input->post('quantity'),
				'p_trim'=>$this->input->post('trim'),
				'price'=>$this->input->post('price'),
				'updatedBy'=>$this->session->userdata('email'),
			);
			$data=$this->db->insert('inventory',$data);
			if($data)
			{
				echo "<script>alert('Part Added Successfully');history.go(-2);</script>";
			}
			else
			{
				echo "<script>alert('Part Not Added! Something went wrong.');history.go(-2);</script>";
			}

		}else{
			$this->index();
		}

	}
	public function editparts($id)
	{
		$data['rec']=$this->db->get_where('inventory',array('id'=>$id));
		$this->load->view('topbar');
		$this->load->view('sidebar');
		$this->load->view('parts/editparts_form',$data);
		$this->load->view('footer');

	}
}

?>