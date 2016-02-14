<?php
header('Access-Control-Allow-Origin: *'); 

class ConfControlador extends CI_Controller {

	public function configuracion()
	{
        $data['username'] = $this->session->userdata('username');
        if($data['username']==""){
        	return $this->load->view('login');
        }else{
        	$this->load->model("ConfModelo");
			$data2 = $this->ConfModelo->loadColor();
			$objeto = new stdClass();
			foreach ($data2 as $row) {
				if($row->idColor == 1){
					$objeto->color1 = $row->color;
				}
				if($row->idColor == 2){
					$objeto->color2 = $row->color;
				}
				if($row->idColor == 3){
					$objeto->color3 = $row->color;
				}
				if($row->idColor == 4){
					$objeto->color4 = $row->color;
				}
			}
			$objeto->username = $data['username'];
			return $this->load->view('configuraciones',$objeto);
		}
	}

	public function getRangeLoad(){
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->loadRangeValues();
		$respuesta = new stdClass();
		$respuesta->rangos = array();
		foreach ($data as $row) {
			$objeto = new stdClass();
			$objeto->tipo = $row->tipo_stream;
			$objeto->valor = $row->valor;
			$objeto->limiteInferior = (float)$row->limite_inferior;
			$objeto->limiteSuperior = (float)$row->limite_superior;
			$objeto->idValor = $row->idColor;
			array_push($respuesta->rangos, $objeto);
		}
		echo json_encode($respuesta);
	}

	public function loadUsers(){
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->loadUsers();
		echo json_encode($data);
	}

	public function saveUP(){
		$limiteInferior1 = $this->input->get('limiteInferior1');
		$limiteSuperior1 = $this->input->get('limiteSuperior1');
		$valor1 = $this->input->get('valor1');
		$limiteInferior2 = $this->input->get('limiteInferior2');
		$limiteSuperior2 = $this->input->get('limiteSuperior2');
		$valor2 = $this->input->get('valor2');
		$limiteInferior3 = $this->input->get('limiteInferior3');
		$limiteSuperior3 = $this->input->get('limiteSuperior3');
		$valor3 = $this->input->get('valor3');
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->saveUP($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3);
		$response = new stdClass();
		$response->mensaje = "ok";
		echo json_encode($response);
	}

	public function saveDP(){
		$limiteInferior1 = $this->input->get('limiteInferior1');
		$limiteSuperior1 = $this->input->get('limiteSuperior1');
		$valor1 = $this->input->get('valor1');
		$limiteInferior2 = $this->input->get('limiteInferior2');
		$limiteSuperior2 = $this->input->get('limiteSuperior2');
		$valor2 = $this->input->get('valor2');
		$limiteInferior3 = $this->input->get('limiteInferior3');
		$limiteSuperior3 = $this->input->get('limiteSuperior3');
		$valor3 = $this->input->get('valor3');
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->saveDP($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3);
		$response = new stdClass();
		$response->mensaje = "ok";
		echo json_encode($response);
	}

	public function saveUS(){
		$limiteInferior1 = $this->input->get('limiteInferior1');
		$limiteSuperior1 = $this->input->get('limiteSuperior1');
		$valor1 = $this->input->get('valor1');
		$limiteInferior2 = $this->input->get('limiteInferior2');
		$limiteSuperior2 = $this->input->get('limiteSuperior2');
		$valor2 = $this->input->get('valor2');
		$limiteInferior3 = $this->input->get('limiteInferior3');
		$limiteSuperior3 = $this->input->get('limiteSuperior3');
		$valor3 = $this->input->get('valor3');
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->saveUS($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3);
		$response = new stdClass();
		$response->mensaje = "ok";
		echo json_encode($response);
	}

	public function saveDS(){
		$limiteInferior1 = $this->input->get('limiteInferior1');
		$limiteSuperior1 = $this->input->get('limiteSuperior1');
		$valor1 = $this->input->get('valor1');
		$limiteInferior2 = $this->input->get('limiteInferior2');
		$limiteSuperior2 = $this->input->get('limiteSuperior2');
		$valor2 = $this->input->get('valor2');
		$limiteInferior3 = $this->input->get('limiteInferior3');
		$limiteSuperior3 = $this->input->get('limiteSuperior3');
		$valor3 = $this->input->get('valor3');
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->saveDS($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3);
		$response = new stdClass();
		$response->mensaje = "ok";
		echo json_encode($response);
	}

	public function saveColor(){
		$optimo = "#".$this->input->get('optimo');
		$fallo = "#".$this->input->get('fallo');
		$advertencia = "#".$this->input->get('advertencia');
		$fuera = "#".$this->input->get('fuera');
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->saveColor($optimo,$fallo,$advertencia,$fuera);
		$response = new stdClass();
		$response->mensaje = "ok";
		echo json_encode($response);
	}

	public function deleteUser(){
		$idUsuario = $this->input->get('idUsuario');
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->deleteUser($idUsuario);
		$response = new stdClass();
		$response->mensaje = "ok";
		echo json_encode($response);
	}

	public function newUser(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tipo_usuario = $this->input->post('tipo_usuario');
		$this->load->model("ConfModelo");
		$data = $this->ConfModelo->newUser($username,$password,$tipo_usuario);
		$response = new stdClass();
		$response->mensaje = "ok";
		echo json_encode($response);
	}
}
?>