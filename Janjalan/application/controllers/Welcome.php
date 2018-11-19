<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	function __construct(){
		parent::__construct();
		$this->load->model('modeljanjalan');
	}
	
	public function getpesanan(){
		$data['isipesanan'] = $this->modeljanjalan->getpesanan()->result();
		$this->load->view('hotelorder',$data);
	}
	
	public function getreview(){
		$data['isipesanan'] = $this->modeljanjalan->getpesanan()->result();
		$this->load->view('hotelreview',$data);
	}
	
	public function getkamar(){
		$data['isipesanan'] = $this->modeljanjalan->getkamar()->result();
		$this->load->view('hotelproviderhome',$data);
	}
	
	public function getinvoice(){
		$data['isi'] = $this->modeljanjalan->getinvoice()->result();
		$this->load->view('hotelinvoice',$data);
	}
	
	public function getcustomer(){
		$data['customer'] = $this->model_pesanan->get('customer')->result();
		$this->load->view('pesanan',$data);
	}
	 	
	public function index()
	{	$this->load->helper('url');
		$this->load->view('login');
	}
	
	public function loadcustomerhome(){
		$this->load->view('customer/tampilan');
	}
	
	public function loadcustomerpembayaran(){
		$this->load->view('customer/tampilanPembayaran');
	}
	
	public function loadcustomerfinishedreview(){
		$this->load->view('customer/selesaiReview');
	}
	
	public function loadcustomerhoteldetails(){
		$this->load->view('customer/rincianHotel');
	}
	
	public function loadcustomerhotelreview(){
		$this->load->view('customer/reviewHotel');
	}
	
	public function loadcustomersuccesspayment(){
		$this->load->view('customer/pembayaranSukses');
	}
	
	public function loadcustomerguestinfo(){
		$this->load->view('customer/informasiTamu' , $error);
	}
	
	public function loadcustomerhotelresult(){
		$this->load->view('customer/hasilPencarianHotel');
	}
	
	public function loadcustomerhotelprice(){
		$this->load->view('customer/hargaHotel');
	}
	
	public function loadcustomerorder(){
		$this->load->view('customer/checkPesanan');
	}
	
	public function do_upload(){
		$config['upload_path'] = 'http://localhost/janjalan/assets/gallery/bukti';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0'; // No Limit
        $config['max_width']  = '0'; // No Limit
        $config['max_height']  = '0'; // No Limit

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
		
		$input_name = "userfile";

        if ( ! $this->upload->do_upload($input_name))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('customer/informasiTamu', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('customer/informasiTamu');
        }
		
	}
	
	
}
