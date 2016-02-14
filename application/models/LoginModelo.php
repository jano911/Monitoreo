<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModelo extends CI_Model {

	public function login($username,$password){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select usuario, contraseña as contrasena, tipo_usuario from usuarios where usuario='$username' and contraseña='$password'");
		//echo "select usuario, contraseña as contrasena, tipo_usuario from usuarios where usuario='$username' and contraseña='$password'";
		return $data->result();
	}
}
?>