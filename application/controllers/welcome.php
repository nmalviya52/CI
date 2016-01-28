<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library(array('ion_auth','form_validation'));
	}

	public function index()
	{
		// if($this->session->userdata('type')=='customer') $this->load->view('header_user');		 
		// elseif($this->session->userdata('type') =='vendor') $this->load->view('vendor_head');
		// elseif ($this->session->userdata('type') =='admin') $this->load->view('admin_head');
		// else $this->load->view('logged_out_head');
		$this->load->view('header_user');
		$this->load->view('welcome_message');
	}


	public function progpage()
	{
		if($this->session->userdata('type')=='admin')
		{$this->load->model('logmodel');
		$q = $this->logmodel->pull();
		$data['tab']=$q;
		$this->load->view('Progress', $data);}
		elseif($this->session->userdata('type')=='customer')
		{
			//load customer progress page
		}
		
	}

public function che(){
	$this->load->view('measurements.html');
}

public function srch()
{	
	$q = $_GET['query'];
	$q = strtolower($q);
	$this->load->model('logmodel');
	$x = $this->logmodel->search($q);
	$data['list'] = $x;
	$this->load->view('in.html',$data);
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */