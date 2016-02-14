<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfModelo extends CI_Model {

	public function loadRangeValues(){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select limite_inferior,limite_superior,b.color,tipo_stream,c.idValor, c.valor ,b.idColor
			from configuracion_valores a inner join color b on a.color=b.idColor
			inner join valores_config c on a.clase_valor=c.idVALOR
			where aparato='CM' order by c.valor,tipo_stream,limite_inferior");
		return $data->result();
	}

	public function loadUsers(){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select idUsuario,usuario,contraseña as contrasena, tipo_usuario from usuarios");
		return $data->result();
	}

	public function loadColor(){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select idColor, color, descripcion from color order by idCOLOR asc");
		return $data->result();
	}

	public function saveUP($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior1, limite_superior=$limiteSuperior1, color=$valor1 where idCONF=13");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior2, limite_superior=$limiteSuperior2, color=$valor2 where idCONF=15");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior3, limite_superior=$limiteSuperior3, color=$valor3 where idCONF=14");
		return 0;
	}

	public function saveDP($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior1, limite_superior=$limiteSuperior1, color=$valor1 where idCONF=16");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior2, limite_superior=$limiteSuperior2, color=$valor2 where idCONF=18");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior3, limite_superior=$limiteSuperior3, color=$valor3 where idCONF=17");
		return 0;
	}

	public function saveUS($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior1, limite_superior=$limiteSuperior1, color=$valor1 where idCONF=7");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior2, limite_superior=$limiteSuperior2, color=$valor2 where idCONF=9");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior3, limite_superior=$limiteSuperior3, color=$valor3 where idCONF=8");
		return 0;
	}

	public function saveDS($limiteInferior1,$limiteSuperior1,$valor1,$limiteInferior2,$limiteSuperior2,$valor2,$limiteInferior3,$limiteSuperior3,$valor3){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior1, limite_superior=$limiteSuperior1, color=$valor1 where idCONF=10");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior2, limite_superior=$limiteSuperior2, color=$valor2 where idCONF=12");
		$this->db->query("update configuracion_valores set limite_inferior=$limiteInferior3, limite_superior=$limiteSuperior3, color=$valor3 where idCONF=11");
		return 0;
	}

	public function saveColor($optimo,$fallo,$advertencia,$fuera){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$this->db->query("update color set color='$optimo' where idCOLOR=2");
		$this->db->query("update color set color='$fallo' where idCOLOR=1");
		$this->db->query("update color set color='$advertencia' where idCOLOR=3");
		$this->db->query("update color set color='$fuera' where idCOLOR=4");
		return 0;
	}

	public function deleteUser($idUsuario){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$this->db->query("delete from usuarios where idUsuario=$idUsuario");
		return 0;
	}

	public function newUser($username,$password,$tipo_usuario){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$this->db->query("insert into usuarios(usuario,contraseña,tipo_usuario) values('$username','$password','$tipo_usuario')");
		return 0;
	}
}
?>