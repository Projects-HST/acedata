<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct() {
		 parent::__construct();
		  $this->load->model('home');
		 $this->load->helper('url');
		  $this->load->library('session');


 }

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
	public function index()
	{
		//echo "1";
			  $this->load->view('header');
		 		$this->load->view('home');
		    $this->load->view('footer');

	}

	public function history()
	{

				$this->load->view('header');
				$this->load->view('history');
				$this->load->view('footer');

	}
	public function services()
	{

				$this->load->view('header');
				$this->load->view('services');
				$this->load->view('footer');

	}
	public function portfolio()
	{

				$this->load->view('header');
				$this->load->view('portfolio');
				$this->load->view('footer');

	}
	public function contact()
	{

				$this->load->view('header');
				$this->load->view('contact');
				$this->load->view('footer');

	}
	public function gallery()
	{

				$this->load->view('header');
				$this->load->view('gallery');
				$this->load->view('footer');

	}
	public function about()
	{

				$this->load->view('header');
				$this->load->view('about');
				$this->load->view('footer');

	}

	public function notfound()
	{

		$data['meta_title']= 'Happysanz';

		$this->load->view('404');

	}


	public function help()
	{

		 $name = $this->input->post("name");
		$email = $this->input->post("email");
		 $phone = $this->input->post("phone");
		$message = $this->input->post("message");
		date_default_timezone_set('Asia/Kolkata');
		$senton = date('d-m-Y H:i');
		$to = 'kamal.happysanz@gmail.com';
		$htmlContent = '
				<html>
				<head>  <title></title>
				</head>
				<body>

						<table cellspacing="0" style="border: 2px dashed #FB4314; width: 500px; height: 300px;">
						<tr>
								<th>Request On:</th><td>'.$senton.'</td>
						</tr>
								<tr>
										<th>Name:</th><td>'.$name.'</td>
								</tr>
								<tr>
										<th>Email:</th><td>'.$email.'</td>
								</tr>
								<tr>
										<th>Phone Number:</th><td>'.$phone.'</td>
								</tr>
								<tr>
										<th>Message:</th><td>'.$message.'</td>
								</tr>

						</table>
				</body>
				</html>';

		// Set content-type header for sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// Additional headers
		$headers .= 'From: Happysanz<info@happysanz.com>' . "\r\n";
		$sent=mail($to,$message,$htmlContent,$headers);
		//$this->home->contactus($name,$email,$message);
		$this->session->set_flashdata('msg', 'Thanks For Contact us ! We will get back to you !.');
		redirect('contact');
		// if($sent){
		// 	echo "success";
		// }else{
		// 	echo "failed";
		// }

	}
}
