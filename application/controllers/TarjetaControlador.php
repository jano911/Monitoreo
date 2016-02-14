<?php
header("Acces-Control-Allow-Origin: *");

class TarjetaControlador extends CI_Controller {

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
	public function tarjetas()
	{
		$data['username'] = $this->session->userdata('username');
        if($data['username']==""){
        	return $this->load->view('login');
        }else{
			return $this->load->view('tarjetas',$data);
		}
	}
	
	public function getTarjetas(){
		$this->load->model("TarjetaModelo");
		$data = $this->TarjetaModelo->getTarjetas();
		echo json_encode($data);
	}

	
}
