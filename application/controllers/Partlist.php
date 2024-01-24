<?php
class Partlist extends CI_Controller
{
    public function __Construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('listingparts');
    }

    public function index()
    {
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('partlisting/addpart');
        $this->load->view('footer');
    }

    public function showpartlisted()
    {
        $data['query']= $this->db->get('partlisting')->result();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('partlisting/showpartlisted',$data);
        $this->load->view('footer');
    }

    public function numberofpartlisted()
    {
        
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }
    
    public function addpartlisted()
    {
        $this->form_validation->set_rules('listing','Part Listing','required');
        $this->form_validation->set_rules('year','Year','required|numeric');
        $this->form_validation->set_rules('make','Make','required');
        $this->form_validation->set_rules('Model','Model','required');
        $this->form_validation->set_rules('trim','Trim','required');
        $this->form_validation->set_rules('partname','Part Name','required');
        $this->form_validation->set_rules('sellingprice','Selling Price','required|numeric');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $d_name = explode(".",$_FILES['userfile']['name']);
        $ext = end($d_name);
        $new_name = time().'.'.$ext;
        $config['file_name'] = $new_name;
        $photo_name = 'uploads/'.$new_name;
        $this->load->library('upload', $config);


        if($this->form_validation->run() || $this->upload->do_upload('userfile'))
        {
            $data=array(
                'listing'=>$this->input->post('listing'),
                'year'=>$this->input->post('year'),
                'make'=>$this->input->post('make'),
                'model'=>$this->input->post('model'),
                'trim'=>$this->input->post('trim'),
                'partname'=>$this->input->post('partname'),
                'sellingprice'=>$this->input->post('sellingprice'),
                'remarks'=>$this->input->post('remarks'),
                'photo'=>$photo_name,
                'cuby'=>$this->session->userdata('email'),
            );

            

            $data=$this->db->insert('partlisting', $data);
            if($data){

                echo "<script>alert('Insertion Successfully');history.go(-1);</script>";
            }else{
                echo "<script>alert('Insertion Failed');history.go(-2);</script>";
            }
            
        }else{
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('topbar');
            $this->load->view('sidebar');
            $this->load->view('partlisting/addpart',$error);
            $this->load->view('footer');
            
        }
        
    }

    public function editpartlisted($id)
    {
        
        $data['cmd']=$this->listingparts->editpartlisted($id);
         
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('partlisting/editpart',$data);
        $this->load->view('footer');
    }

    public function updatepartlisted($id)
    {
        $this->form_validation->set_rules('listing','Part Listing','required');
        $this->form_validation->set_rules('year','Year','required|numeric');
        $this->form_validation->set_rules('make','Make','required');
        $this->form_validation->set_rules('Model','Model','required');
        $this->form_validation->set_rules('trim','Trim','required');
        $this->form_validation->set_rules('partname','Part Name','required');
        $this->form_validation->set_rules('sellingprice','Selling Price','required|numeric');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $d_name = explode(".",$_FILES['userfile']['name']);
        $ext = end($d_name);
        $new_name = time().'.'.$ext;
        $config['file_name'] = $new_name;
        $photo_name = 'uploads/'.$new_name;
        $this->load->library('upload', $config);
        

        if($this->form_validation->run() || $this->upload->do_upload('userfile'))
        {
            $data=array(
                'listing'=>$this->input->post('listing'),
                'year'=>$this->input->post('year'),
                'make'=>$this->input->post('make'),
                'model'=>$this->input->post('model'),
                'trim'=>$this->input->post('trim'),
                'partname'=>$this->input->post('partname'),
                'sellingprice'=>$this->input->post('sellingprice'),
                'remarks'=>$this->input->post('remarks'),
                'photo'=>$photo_name,
                'cuby'=>$this->session->userdata('email'),
            );

            
                $this->db->set($data);
                $this->db->where('id',$id);
            $data=$this->db->update('partlisting', $data);
            if($data)
            {
                echo "<script>alert('Updated Successfully');history.go(-2);</script>";
            }else{

                echo "<script>alert('Update Failed!');history.go(-1);</script>";

            }
            
        }else{
           $this->editpartlisted($id);
            
        }
        
    }

}

?>