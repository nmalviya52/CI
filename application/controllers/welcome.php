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

	//	$this->load->model('srch');
	}

	public function index()
	{	 //echo $_SESSION['type'];
		if(isset($_COOKIE['type']))
		{if($_COOKIE['type'] == 2){
			//fetch logged out header
			$this->load->view('admin_head');
			;
		}
		else if($_COOKIE['type'] == 1) $this->load->view('cust_head');
		else if($_COOKIE['type'] == 0) $this->load->view('vendor_head');}
		//else $this->load->view('logged_out_head');
			
		
		$this->load->view('welcome_message');
	}


	public function progpage()
	{	echo "string";
		
		//$q=$this->progresspull->pull();
		$this->load->model('logmodel');
		$q = $this->logmodel->pull();
		$data['tab']=$q;

		
		//var_dump(expression)
		$this->load->view('Progress', $data);
		//$this->load->view('welcome_message');
	}
	public function upd_prog()
{	echo $this->input->ip_address();
	// if($_session['is_admin']){
	// 	$this->load->view('');//change page
	// }
	// else 
	// {
	// 	$this->index();
	// }
}
public function che(){
	$this->load->view('reg_page');
}

public function srch()
{	
	//echo "esfdzdxc";
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