 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->session->userdata('email');
    }

    public function index()
    {
        $data['info']=$this->db->get('partlisting')->result();
        $data['rec']=$this->db->get('cardinfo')->result();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('orders/orderform',$data);
        $this->load->view('footer');

    }

    public function showorder()
    {
        $this->load->model('ordermodel');
        $data['rec']=$this->ordermodel->showtablesdata()->result();
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('orders/ordertable',$data);
        $this->load->view('footer');
    }

    public function insertorderdetails()
    {
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('cname','Customer Name','required');
        $this->form_validation->set_rules('cemail','Customer Email','required|valid_email');
        $this->form_validation->set_rules('cphone','Customer Phone','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('cebayid','Order ID','required');
        $this->form_validation->set_rules('sku','SKU','required');
        $this->form_validation->set_rules('sellingprice','Selling Price','required');
        $this->form_validation->set_rules('ebayfees','Ebay Fees','required');
        $this->form_validation->set_rules('mfees','Marketing Fees','required');
        $this->form_validation->set_rules('shipbydate','Shipby Date','required');
        $this->form_validation->set_rules('card','Card','required');

        if($this->form_validation->run()) 
        {
            $data=array(
                'date'=>$this->input->post('date'),
                'custname'=>$this->input->post('cname'),
                'cemail'=>$this->input->post('cemail'),
                'cphone'=>$this->input->post('cphone'),
                'cadd'=>$this->input->post('address'),
                'cebayid'=>$this->input->post('cebayid'),
                'skuid'=>$this->input->post('sku'),
                'sellingprice'=>$this->input->post('sellingprice'),
                'ebayfees'=>$this->input->post('ebayfees'),
                'marketingfees'=>$this->input->post('mfees'),
                'shipbydate'=>$this->input->post('shipbydate'),
                'paidbycard'=>$this->input->post('card'),
                'cuby'=>$this->session->userdata('email'),
            );
            var_dump($data);
            exit();

            // $data2=array(

            //     'oidebay'=>$this->input->post('cebayid'),
            //     'under_process'=>$this->input->post('under_process'),
            //     'part_found'=>$this->input->post('part_found'),
            //     'followup_1'=>$this->input->post('followup_1'),
            //     'followup_2'=>$this->input->post('followup_2'),
            //     'completed'=>$this->input->post('completed'),
            //     'return_exchange'=>$this->input->post('return_exchange'),
            //     'return_refund'=>$this->input->post('return_refund'),
            //     'cancelled'=>$this->input->post('cancelled'),
            //     'f_remarks '=>$this->input->post('remarks'),
            //     'cuby'=>$this->session->userdata('email'),

            // );

            // $cmd1=$this->db->insert('orderinfo',$data);
            // $cmd2=$this->db->insert('flags',$data2);

            // if($cmd1== True && $cmd2 == True)
            // {

            //     echo "<script>alert('order created successfull');history.go(-2)</script>";

            // }else{

            //    echo "problem";
            // }
        }
        else{

            $this->index();
        }

    }
    //fetching selling price and display in field with ajax
    public function fetchSp()
    {
        if($this->input->post('id'))
        {
             $this->load->model('ordermodel');
            echo $this->ordermodel->fetchSellingprice($this->input->post('id'));
        }
        

    }

    //fetched partlisted and displayed in dropdown
    public function fetchPartListed()
    {
        if($this->input->post('id'))
        {
             $this->load->model('ordermodel');
            echo $this->ordermodel->fetchTable($this->input->post('id'));
        }
        

    }
    public function fetchFullOrderDetails($oid)
    {
         $this->load->model('ordermodel');
        $data['var']=$this->ordermodel->showOrderFlagDetails($oid);
        $data['reco']=$this->ordermodel->fetchwareinfo($oid);
        $this->load->view('topbar');
        $this->load->view('orders/fulldetails',$data);
        $this->load->view('footer');      
        
    }

    public function  editorderform($id)
    {
        $this->load->model('ordermodel');
        $data['info']=$this->db->get('partlisting')->result();
        $data['rec']=$this->db->get('cardinfo')->result();
        $data['res']=$this->ordermodel->editorders($id);
        $this->load->view('topbar');
        $this->load->view('sidebar');
        $this->load->view('orders/editorderform',$data);
        $this->load->view('footer');
    }

    public function updateorders($oid)
    {
         $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('cname','Customer Name','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('cemail','Customer Email','required|valid_email');
        $this->form_validation->set_rules('cphone','Customer Phone','required|numeric');
        $this->form_validation->set_rules('address','Address','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('cebayid','Order ID','required');
        $this->form_validation->set_rules('sku','SKU','required');
        $this->form_validation->set_rules('sellingprice','Selling Price','required|numeric');
        $this->form_validation->set_rules('ebayfees','Ebay Fees','required|numeric');
        $this->form_validation->set_rules('mfees','Marketing Fees','required|numeric');
        $this->form_validation->set_rules('shipbydate','Shipby Date','required');
        $this->form_validation->set_rules('card','Card','required|numeric');

        if($this->form_validation->run())
        {
            $data=array(
                'date'=>$this->input->post('date'),
                'custname'=>ucwords($this->input->post('cname')),
                'cemail'=>$this->input->post('cemail'),
                'cphone'=>$this->input->post('cphone'),
                'cadd'=>ucwords($this->input->post('address')),
                'cebayid'=>$this->input->post('cebayid'),
                'skuid'=>$this->input->post('sku'),
                'sellingprice'=>$this->input->post('sellingprice'),
                'ebayfees'=>$this->input->post('ebayfees'),
                'marketingfees'=>$this->input->post('mfees'),
                'shipbydate'=>$this->input->post('shipbydate'),
                'paidbycard'=>$this->input->post('card'),
                'cuby'=>$this->session->userdata('email'),
            );
        $oid=$data['cebayid'];

            $data2=array(
                // 'oidebay'=>$this->input->post('cebayid'),
                'under_process'=>$this->input->post('under_process'),
                'part_found'=>$this->input->post('part_found'),
                'followup_1'=>$this->input->post('followup_1'),
                'followup_2'=>$this->input->post('followup_2'),
                'completed'=>$this->input->post('completed'),
                'return_exchange'=>$this->input->post('return_exchange'),
                'return_refund'=>$this->input->post('return_refund'),
                'cancelled'=>$this->input->post('cancelled'),
                'cuby'=>$this->session->userdata('email'),
            );
            $this->db->update('orderinfo',$data,array('cebayid'=>$oid));
            $result=$this->db->update('flags',$data2,array('oidebay'=>$oid));
            if($result){
                echo "<script>alert('order Updated successfull');history.go(-2)</script>";

            }else{
                echo "<script>alert('order Updation Failes');</script>";
                $this->editorderform($id);
            }


            
        }
        else
        {
            $this->editorderform($oid);      
        }
    }
   
}


?>