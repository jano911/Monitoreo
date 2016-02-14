<?php

//session_start(); //we need to start session in order to access it through CI

Class LoginControlador extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('LoginModelo');
	}

	// Show login page
	public function index() {
		session_destroy();
		return $this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model("LoginModelo");
		$data = $this->LoginModelo->login($username,$password);
		if(!empty($data)){
			foreach ($data as $row) {
				$newdata = array(
			        'username'  => $row->usuario,
			        'tipo_usuario' => $row->tipo_usuario,
			        'logged_in' => TRUE
				);
			}
			$this->session->set_userdata($newdata);
			echo json_encode($newdata);
		}
		else{
			$newdata = array(
					'username'=>'incorrecto');
			echo json_encode($newdata);
		}
	}

	public function logout(){
		session_destroy();
		return $this->load->view('login');
	}
}

?>