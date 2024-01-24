<?php
    class Flags extends CI_Controller
    {
        public function index($id)
        {
            $data['records']=$this->db->get_where('flags',array('oidebay'=>$id))->result();
            $this->load->view('topbar');
            $this->load->view('sidebar');
            $this->load->view('flags/showflags',$data);
            $this->load->view('footer');

        }
        public function showflags()
        {
            $this->load->model('flagmodel');
            $data['rec']=$this->flagmodel->fetchDetails();
            $this->load->view('topbar');
            $this->load->view('sidebar');
            $this->load->view('flags/showorderspartbooked',$data);
            $this->load->view('footer');
        }
        public function updateflags($oid)
        {
            $data=array(
                
                "under_process"=>$this->input->post('under_process'),
                "part_found"=>$this->input->post('part_found'),
                "followup_1"=>$this->input->post('followup_1'),
                "completed"=>$this->input->post('completed'),
                "return_exchange"=>$this->input->post('return_exchange'),
                "return_refund"=>$this->input->post('return_refund'),
                "cancelled"=>$this->input->post('cancelled'),
                "remarks"=>$this->input->post('remarks'),
            );

            $query=$this->db->update('flags',$data,array('oidebay'=>$oid));
            if($query)
            {
                echo "<script>alert('Updated Successfully');history.go(-2);</script>";
            }
            else
            {
                echo "<scipt>alert('Not Updated!Something went wrong');history.go(-2);</script>";
            }
        }
    }
?>