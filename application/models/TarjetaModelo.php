<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TarjetaModelo extends CI_Model {


	public function getTarjetas(){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		//$this->db->query("use newsoftv");
		$data = $this->db->query("call Tarjetas");
		return $data->result();
	}

	public function getPuertos(){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select distinct(indiceUp) from cable_modem");
		return $data->result();
	}

	public function getDataPuertos(){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select distinct ip_address,indiceUp,mac_address from cable_modem where indiceUp is not null and indiceUp <> '' order by fecha desc");
		return $data->result();
	}

}
