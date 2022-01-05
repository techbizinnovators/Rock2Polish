<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 public function __construct(){
		 parent::__construct();
		 $this->load->model('MyModel');
		 $this->load->helper(array('form','url','file','download','email'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('email');
	 }
	 public function index()
	 {
	 	 $this->load->view('web/header');
		 $this->load->view('web/home');
		 $this->load->view('web/footer');
	 }
	 public function about()
	 {
		$this->load->view('web/header');
		$this->load->view('web/about');
		$this->load->view('web/footer');
	 }
	 public function contact()
	 {
		$this->load->view('web/header');
		$this->load->view('web/contact');
		$this->load->view('web/footer');
	 }
	 public function shop()
	 {
		$this->load->view('web/header');
		$this->load->view('web/shop');
		$this->load->view('web/footer');
	 }
	 public function load_round()
	 {
		$this->load->view('web/header');
		$this->load->view('web/round');
		$this->load->view('web/footer');
		
	 }

      public function round_details()
     { 
	$this->load->view('web/header');
	$this->load->view('web/round-details');
	$this->load->view('web/footer');
      }

	  public function round_details2()
     { 
	$this->load->view('web/header');
	$this->load->view('web/round-details2');
	$this->load->view('web/footer');
      }

	  public function sign_in()
	  { 
	 $this->load->view('web/header');
	 $this->load->view('web/sign-in');
	 $this->load->view('web/footer');
	   }

      public function call_details()
     { 
	$this->load->view('web/header');
	$this->load->view('web/call-details');
	$this->load->view('web/footer');
      }


	 public function radiant()
	 {
		$this->load->view('web/header');
		$this->load->view('web/radiant');
		$this->load->view('web/footer');
	 }
	 public function princess()
	 {
		$this->load->view('web/header');
		$this->load->view('web/princess');
		$this->load->view('web/footer');
	 }
	 public function pearl()
	 {
		$this->load->view('web/header');
		$this->load->view('web/pearl');
		$this->load->view('web/footer');
	 }

	 public function oval()
	 {
		$this->load->view('web/header');
		$this->load->view('web/oval');
		$this->load->view('web/footer');
	 }
	 public function marquise()
	 {
		$this->load->view('web/header');
		$this->load->view('web/marquise');
		$this->load->view('web/footer');
	 }
	 public function heart()
	 {
		$this->load->view('web/header');
		$this->load->view('web/heart');
		$this->load->view('web/footer');
	 }
	 public function emerald()
	 {
		$this->load->view('web/header');
		$this->load->view('web/emerald');
		$this->load->view('web/footer');
	 }
	 public function asscher()
	 {
		$this->load->view('web/header');
		$this->load->view('web/asscher');
		$this->load->view('web/footer');
	 }
	 public function master_cut()
	 {
		$this->load->view('web/header');
		$this->load->view('web/master_cut');
		$this->load->view('web/footer');
	 }
	 public function cushion()
	 {
		$this->load->view('web/header');
		$this->load->view('web/cushion');
		$this->load->view('web/footer');
	 }
	 public function jewellery()
	 {
		$this->load->view('web/header');
		$this->load->view('web/jewellers');
		$this->load->view('web/footer');
	 }
	 public function get_price()
	 {
		 $price=$this->input->post('price');
		 echo $price;
	 }
	 public function send_contact()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$subject=$this->input->post('subject');
		$message=$this->input->post('message');
		$title = 'Message From Keystar ';
			$message = '
			<h3 align="center">Form Information Contact Us </h3>
				<table width="100%" cellpadding="5">
					<tr>
						<td width="30%">Full Name</td>
						<td width="70%">'.$name.'</td>
					</tr>
					<tr>
					<td width="30%">Email Address</td>
					<td width="70%">'.$email.'</td>
				</tr>
				<tr>
				<td width="30%">Contact Number</td>
				<td width="70%">'.$contact.'</td>
			</tr>
			<tr>
			<td width="30%">Subject For</td>
			<td width="70%">'.$subject.'</td>
		</tr>
		<tr>
			<td width="30%">Message</td>
			<td width="70%">'.$message.'</td>
		</tr>
				</table>
			';
		    $this->email->set_newline("\r\n");
		    $this->email->from('info@techbizinnovators.com.au', 'Keystar');
		    $this->email->to('happy.christian.hc3@gmail.com');
		    $this->email->subject($title);
	        $this->email->message($message);
			if ($this->email->send()) {
				redirect('Main/contact');
			} else {
				show_error($this->email->print_debugger());
			}
	}
	public function send_jewellery()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$inquiry_for=$this->input->post('inquiry_for');
		$message=$this->input->post('message');
		$title = 'Message From Keystar Gems';
			$message = '
			<h3 align="center">Form Information Jewellery Inquiry</h3>
				<table width="100%" cellpadding="5">
					<tr>
						<td width="30%">Full Name</td>
						<td width="70%">'.$name.'</td>
					</tr>
					<tr>
						<td width="30%">Email Address</td>
						<td width="70%">'.$email.'</td>
					</tr>
					<tr>
						<td width="30%">Contact Number</td>
						<td width="70%">'.$contact.'</td>
					</tr>
					<tr>
						<td width="30%">Subject For</td>
						<td width="70%">'.$inquiry_for.'</td>
					</tr>
					<tr>
						<td width="30%">Message</td>
						<td width="70%">'.$message.'</td>
					</tr>
				</table>
			';
		    $this->email->set_newline("\r\n");
		    $this->email->from('sales@keystargems.com', 'Keystar');
		    $this->email->to('sales@keystargems.com');
		    $this->email->subject($title);
	        $this->email->message($message);
			$this->email->send();
			redirect('Main/jewellery');
	}
	public function send_diamond()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$size=$this->input->post('size');
		$color=$this->input->post('color');
		$clarity=$this->input->post('clarity');
		$shape=$this->input->post('shape');
		$title = 'Message From Keystar Gems';
			$message = '
			<h3 align="center">Form Information Diamond Inquiry </h3>
				<table width="100%" cellpadding="5">
					<tr>
						<td width="30%">Full Name</td>
						<td width="70%">'.$name.'</td>
					</tr>
					<tr>
					<td width="30%">Email Address</td>
					<td width="70%">'.$email.'</td>
				</tr>
				<tr>
				<td width="30%">Contact Number</td>
				<td width="70%">'.$contact.'</td>
			</tr>
			<tr>
			<td width="30%">Shape</td>
			<td width="70%">'.$shape.'</td>
		</tr>
			<tr>
			<td width="30%">Clarity</td>
			<td width="70%">'.$clarity.'</td>
		</tr>
		<tr>
			<td width="30%">Color</td>
			<td width="70%">'.$color.'</td>
		</tr>
		<tr>
		<td width="30%">Size</td>
		<td width="70%">'.$size.'</td>
	</tr>
				</table>
			';
		    $this->email->set_newline("\r\n");
		    $this->email->from('sales@keystargems.com', 'Keystar');
		    $this->email->to('sales@keystargems.com');
		    $this->email->subject($title);
	        $this->email->message($message);
			$this->email->send();
			redirect('Main/shop');
	}


}