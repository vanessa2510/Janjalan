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
	
	public function getcustomer(){
		$data['customer'] = $this->model_pesanan->get('customer')->result();
		$this->load->view('pesanan',$data);
	}
	 	
	public function index()
	{	$this->load->helper('url');
		$this->load->view('login');
	}
	
	public function loadhotelinvoice()
	{	$this->load->helper('url');
		$this->load->view('hotelinvoice');
	}
	
	public function loadhotelorder()
	{	$this->load->helper('url');
		$this->load->view('hotelorder');
	}
	public function loadhotelproviderhome()
	{	$this->load->helper('url');
		$this->load->view('hotelproviderhome');
	}
	public function loadhotelreview()
	{	$this->load->helper('url');
		$this->load->view('hotelreview');
	}
}
