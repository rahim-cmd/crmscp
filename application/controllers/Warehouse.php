<?php
class Warehouse extends CI_Controller
{

    public function __Construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('warehousemodel');
    }
    public function index()
    {
        
        redirect(base_url('/'),'refresh');
        
    }
    public function wareinfo($oid)
    {
        $result=$this->db->get_where('wareinfo',array('oid'=>$oid))->num_rows();
        if($result > 0){

            echo "<script>alert('Order Id already Processed! Please Choose some other id.');history.go(-1)</script>";
        }else{
        $data['rec']=$this->db->get_where('orderinfo',array('cebayid'=>$oid))->result();
        $data['flag']=$this->db->get_where('flags',array('oidebay'=>$oid))->result();
        $data['whouse']=$this->db->get_where('warehousedetails',array('status'=>1));
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('warehouse/add_warehouse',$data);
        $this->load->view('footer');
        }
    }
    //to display the warehouse information form to inserting the data related to orders with warehouse
    public function newhouse()
    {
        $data['rec']=$this->db->get('orderinfo')->result();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('warehouse/new_warehouse',$data);
        $this->load->view('footer');
    }

    //insert command of saving data in wareinfo table to save the order information related to warehouse only
    public function insertnewhouse()
    {
        $this->form_validation->set_rules('oid','Order ID','required|is_unique[wareinfo.oid]');
        $this->form_validation->set_rules('warehouse','Warehouse','required');
        $this->form_validation->set_rules('agent','Agent','required');
        $this->form_validation->set_rules('userfile','File','required');
        $this->form_validation->set_rules('purchaseprice','Purchase Price','required');
        $this->form_validation->set_rules('labelprice','Order ID','required');
        $this->form_validation->set_rules('tracking','Tracking Info','required');

        $config['upload_path']          = './uploads/label/';
        $config['allowed_types']        = 'pdf';
        $config['overwrite']=True;
        $d_name = explode(".",$_FILES['userfile']['name']);
        $ext = end($d_name);
        $new_name = time().'.'.$ext;
        $config['file_name'] = $new_name;
        $photo_name = 'uploads/label/'.$new_name;
        $this->load->library('upload', $config);
        

        if($this->form_validation->run() && $this->upload->do_upload('userfile'))
        {
            $data1=array(

                'oid'=>$this->input->post('oid'),
                'w_name'=>ucwords($this->input->post('warehouse')),
                'purchase_price'=>$this->input->post('purchaseprice'),
                'label_price'=>$this->input->post('labelprice'),
                'labelImg'=>$photo_name,
                'w_agent'=>ucwords($this->input->post('agent')),
                'w_remarks'=>$this->input->post('remarks'),
                'tracking'=>$this->input->post('tracking'),
                'cuby'=>$this->session->userdata('name'),

            );
            $oid= $data1['oid'];
            $warehouse=$data1['w_name'];
            $data2=array(
                'oidebay'=>$oid,
                'under_process'=>$this->input->post('under_process'),
                'part_found'=>$this->input->post('part_found'),
                'followup_1'=>$this->input->post('followup-1'),
                'followup_2'=>$this->input->post('followup-2'),
                'completed'=>$this->input->post('completed'),
                'return_exchange'=>$this->input->post('return_exchange'),
                'return_refund'=>$this->input->post('return_refund'),
                'cancelled'=>$this->input->post('cancelled'),
                'cuby'=>$this->session->userdata('email'),
            );

            
            if($warehouse=="7")
            {
                $this->warehousemodel->adjustinventory($oid);
            }   
            $data=$this->db->insert('wareinfo',$data1);
                  $this->db->update('flags',$data2,array('oidebay'=>$oid));
                 $data=$this->sendEmailToWarehouse($oid);
            

            
            if($data==True)
            {
                echo "<script>alert('Data Inserted'); history.go(-2);</script>";

            }else{
                echo "<script>alert('Data not inserted') history.go(-2);</script>";
            }
        }else{

            $this->upload->display_errors();
            $this->newhouse();
            
        }

    }

    //update command for updating the order warehouse
    public function updatenewhouse($wid)
    {
        $this->form_validation->set_rules('oid','Order ID','required');
        $this->form_validation->set_rules('warehouse','Warehouse','required');
        $this->form_validation->set_rules('purchaseprice','Purchase Price','required');
        $this->form_validation->set_rules('labelprice','Order ID','required');
        $this->form_validation->set_rules('tracking','Tracking Info','required');
        $this->form_validation->set_rules('userfile','File','required');
        $config['upload_path']          = './uploads/label/';
        $config['allowed_types']        = 'pdf';
        $config['overwrite']= True;
        $d_name = explode(".",$_FILES['userfile']['name']);
        $ext = end($d_name);
        $new_name = time().'.'.$ext;
        $config['file_name'] = $new_name;
        $photo_name = 'uploads/label/'.$new_name;
        $this->load->library('upload', $config);
        
        if($this->form_validation->run() && $this->upload->do_upload('userfile'))
        {
            $data=array(

               'oid'=>$this->input->post('oid'),
                'w_name'=>ucwords($this->input->post('warehouse')),
                'purchase_price'=>$this->input->post('purchaseprice'),
                'label_price'=>$this->input->post('labelprice'),
                'labelImg'=>$photo_name,
                'w_agent'=>ucwords($this->input->post('agent')),
                'w_remarks'=>$this->input->post('remarks'),
                'tracking'=>$this->input->post('tracking'),
                'cuby'=>$this->session->userdata('name'),

            );
            $oid= $data['oid'];
            $data2=array(
                'oidebay'=>$oid,
                'under_process'=>$this->input->post('under_process'),
                'part_found'=>$this->input->post('part_found'),
                'followup_1'=>$this->input->post('followup-1'),
                'followup_2'=>$this->input->post('followup-2'),
                'completed'=>$this->input->post('completed'),
                'return_exchange'=>$this->input->post('return_exchange'),
                'return_refund'=>$this->input->post('return_refund'),
                'cancelled'=>$this->input->post('cancelled'),
                'cuby'=>$this->session->userdata('email'),
            );
           
            $dat=$this->db->update('wareinfo',$data,array('wid'=>$wid)); 
            $this->db->update('flags',$data2,array('oidebay'=>$oid));
            $this->sendEmailToWarehouse($oid);
            if($dat==True)
            {
                echo "<script>alert('Data Updated'); history.go(-2);</script>";
                

            }else{
                echo "<script>alert('Data not Updated') history.go(-2);</script>";
            }
        }else{

            $this->upload->display_errors();
            
            $this->editwarehouseinfo($wid);
            
        }

    }

    public function insertwhouse()
    {

        $this->form_validation->set_rules('wname','Warehouse Name','required|min_length[4]');
        $this->form_validation->set_rules('wadd','Warehouse Address','required|min_length[5]|is_unique[warehousedetails.w_add]');
        $this->form_validation->set_rules('wphone','Warehouse Phone','required|numeric|is_unique[warehousedetails.w_phone]');
        $this->form_validation->set_rules('wemail','Warehouse Email','required|valid_email');
        $this->form_validation->set_rules('wfax','Warehouse Fax','numeric');
        $this->form_validation->set_rules('wagent','Warehouse Agent','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run())
        {
            
            
            $wname=ucwords($this->input->post('wname'));
            $wadd=ucwords($this->input->post('wadd'));
            $wphone=$this->input->post('wphone');
            $wemail=$this->input->post('wemail');
            $wfax=$this->input->post('wfax');
            $wagent=$this->input->post('wagent');

            $data= array(
                
                'w_name'=>$wname,
                'w_add'=>$wadd,
                'w_phone'=>$wphone,
                'w_email'=>$wemail,
                'w_fax'=>$wfax,
                'w_agent'=>$wagent,
                'updatedBy'=>$this->session->userdata('email'), 
                'cutime'=> date('Y-m-d h:i:s')
            );

            $this->db->insert('warehousedetails', $data);
            
            redirect('warehouse','refresh');
            
        }else{
                
                $this->newhouse();
                        
        }        
        
    }

    //for sending email to warehouse and image as attachment in that email
    public function sendEmailToWarehouse($id)
    {
        $data=$this->warehousemodel->fetchdataforemail($id);
        foreach($data as $row)
        {

            
            $config['protocol'] = 'SMTP';
            $config['smtp_host']=' mail.storecarpart.com';
            $config['smtp_port']= '465';
            $config['mailtype']=   'html';
            $config['smtp_user']='info@crm.storecarpart.com';
            $config['smtp_pass']='Dream2us#';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;

            $this->load->library('email',$config);
            $this->email->to($row->w_email);
            $this->email->from('info@crm.storecarpart.com');
            $this->email->subject('Work Order');
            $this->email->message("Hi ".$row->w_agent."\n\tHere is the workorder details.\nYear: ".$row->year."\nMake: ".$row->make."\nModel: ".$row->model."\rPart Name: ".$row->partname."\nTrim: ".$row->trim."\nPurchase Price: ".$row->purchase_price."\nCard Information:-\nName On Card: ".$row->c_name."\nCard Number: ".$row->c_number."\nCVV/CVC: ".$row->c_cvv."\nEXP: ".$row->c_exp."\nBilling Address: ".$row->c_billing_add."\n");
            $this->email->attach(base_url($row->labelImg));
            $this->email->attach(base_url($row->photo));
            
            if($this->email->send())
            {
                echo "<script>alert('Email Sent Successfully')</script>";
            }else{
                echo "<script>alert('Email Sending Failed!')</script>";
            }
        }
    }

    //to display the normal warehouse for selecting and for referencing only
    public function showwarehouse()
    {
       
        $data['cmd']=$this->warehousemodel->listwarehouse();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('warehouse/warehouse_list',$data);
        $this->load->view('footer');
    }
    public function editwarehouse($id)
    {
        
        $data['row']=$this->warehousemodel->edithouse($id);
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('warehouse/modi_warehouse',$data);
        $this->load->view('footer');

    }
    public function updatewarehouse($id)
    {
        $this->form_validation->set_rules('wname','Warehouse Name','required|min_length[4]');
        $this->form_validation->set_rules('wadd','Warehouse Address','required|min_length[5]');
        $this->form_validation->set_rules('wphone','Warehouse Phone','required|numeric|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('wemail','Warehouse Email','required|valid_email');
        $this->form_validation->set_rules('wfax','Warehouse Fax','numeric');
        $this->form_validation->set_rules('wagent','Warehouse Agent','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run()==true)
        {
            
            $data['row']=$this->warehousemodel->updatehouse($id);
            echo "<script>alert('Warehouse Updated'); setTimeout(function(){location.href=history.go(-2)},500)</script>";
            
        }else{

            echo "<script>alert('Warehouse not updated!')</script>";
            $this->showwarehouse();

        }
        
                
    }
    public function trashwarehouse($id)
    {
        
        $data['row']=$this->warehousemodel->trashhouse($id);
        
        redirect('show_warehouse','refresh');
        
                
    }

    //To display the order details using ajax for warehouse users backend related thing
    public function orderdetails()
    {
        if($this->input->post('id'))
        {
            echo $this->warehousemodel->fetchTable($this->input->post('id'));
        }
        
    }

    public function showorderplaced()
    {
        $data['res']=$this->warehousemodel->showplacedorders()->result();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('warehouse/showplacedorders',$data);
        $this->load->view('footer');
    }
    public function checkwareinfo()
    {
        echo $this->warehousemodel->checkwareorder($this->input->post('id'));
    }
    public function editwarehouseinfo($wid)
    {
        $this->db->select('*');
        $this->db->from('wareinfo');
        $this->db->join('warehousedetails','wareinfo.w_name=warehousedetails.id');
        $this->db->join('flags','flags.oidebay=wareinfo.oid');
        $this->db->where('wareinfo.wid',$wid);
        $data['res']=$this->db->get()->result();
        $data['query']=$this->db->get('warehousedetails')->result();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('warehouse/modi_new_wareinfo',$data);
        $this->load->view('footer');
    }
    public function fetchorderdetails()
    {
        $data['rec']=$this->warehousemodel->showorderdata()->result();
        
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('warehouse/showordertable',$data);
        $this->load->view('footer');
    }
    public function delwarehouseinfo($id)
    {
        $this->db->delete('wareinfo',['wid'=>$id]);
        $this->showorderplaced();
    }

    public function checkInventory()
    {
        echo $this->warehousemodel->chkInventory($this->input->post('oid'));
    }
   
    
}


?>