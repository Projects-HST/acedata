<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginctrl extends CI_Controller {


	function __construct() {
		 parent::__construct();
		 $this->load->model('login');
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

		$this->load->view('admin/login');
	}

	public function logincheck()
	{

			$data = array(
			'user_name' => $this->input->post('username'),
			'user_email' => $this->input->post('email_value'),
			'user_password' => $this->input->post('password')
			);

			$result = $this->login->login($data);
			if ($result == TRUE) {
				$res=$result['type'];
				switch ($res) {
					case '1':
					echo "first";
						break;
						case '12':
						echo "second";
							break;

				}


					//$this->load->view('login_form', $data);
			} else {
				$data['loginfailed']='failed with login details';
				$this->load->view('admin/login',$data);
			

			}

	}


}
