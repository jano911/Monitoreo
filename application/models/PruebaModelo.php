<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaModelo extends CI_Model {

	public function testM()
	{
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select * from cable_modem where mac_address='0013F7C472F9' limit 5");
		return $data->result();
		return $data->result_array();
		//return "Hlola";
	}
	public function getallcontracts($contrato, $nombre, $mac){
		$CI = &get_instance();
		$this->db = $CI->load->database('dbSqlServer', TRUE);
		//$this->db->query("use newsoftv");
		$data = $this->db->query("select distinct a.contrato,b.status,a.nombre,
			d.nombre + ' #' + a.numero + ', ' + e.nombre + '. ' + f.nombre as domicilio,
			g.MacCableModem as mac  from clientes a 
			inner join clientesnet b on a.contrato=b.contrato
			inner join contnet c on b.contratonet=c.contratonet
			left outer join calles d on a.clv_calle=d.clv_calle
			left outer join colonias e on e.clv_colonia=a.clv_colonia
			left outer join CIUDADES f on f.clv_ciudad=a.clv_ciudad
			inner join CatCableModems g on b.Clv_CableModem=g.Clv_CableModem
			where (c.status<>'B' and c.status<>'F') and (a.contrato=$contrato or a.nombre like '%$nombre%' or g.MacCableModem like '%$mac%') order by a.contrato");
		return $data->result();
	}

	public function getdatamodalmac1($mac){
		$CI = &get_instance();
		$this->db = $CI->load->database('dbSqlServer', TRUE);
		$data = $this->db->query("select distinct a.contrato,b.status,a.nombre,
			d.nombre + ' #' + cast(a.numero as varchar(10)) + ', ' + e.nombre + '. ' + f.nombre as domicilio,
			g.MacCableModem as mac, cast(c.ultimo_mes as varchar(10)) + '/' + cast(c.ultimo_anio as varchar(10)) as ultimomes,
			h.descripcion as servicio
			from clientes a 
			inner join clientesnet b on a.contrato=b.contrato
			inner join contnet c on b.contratonet=c.contratonet
			left outer join calles d on a.clv_calle=d.clv_calle
			left outer join colonias e on e.clv_colonia=a.clv_colonia
			left outer join CIUDADES f on f.clv_ciudad=a.clv_ciudad
			inner join CatCableModems g on b.Clv_CableModem=g.Clv_CableModem
			inner join servicios h on h.clv_servicio=c.clv_servicio
			where g.MacCableModem='$mac' and c.status<>'B' and c.status<>'F'");
		return $data->result();
	}
	public function getdatamodalmac2($mac){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select snr as upsnr, us_power as uppotencia, snr_ds as dsnr, ds_power as dpotencia,ip_address as ip,
			indiceUp as upstream, indiceDown as downstream from cable_modem where mac_address='$mac' order by fecha desc limit 1");
		return $data->result();
	}

	public function getdatagraph($mac,$fechaini,$fechafin,$upsnr,$dwsnr,$uppower,$dwpower){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$queryString = 'select';
		$gotOne = 0;
		if($upsnr=="true"){
			$queryString = $queryString.' snr as upsnr';
			$gotOne=1;
		}
		if($dwsnr=="true"){
			if($gotOne==1)
				$queryString = $queryString.",";
			$queryString = $queryString.' snr_ds as dsnr';
			$gotOne=1;
		}
		if($uppower=="true"){
			if($gotOne==1)
				$queryString = $queryString.",";
			$queryString = $queryString.' us_power as uppotencia';
			$gotOne=1;
		}
		if($dwpower=="true"){
			if($gotOne==1)
				$queryString = $queryString.",";
			$queryString = $queryString.' ds_power as dpotencia';
		}
		//echo $queryString." from cable_modem where mac_address='$mac' and fecha>'$fechaini' and fecha<'$fechafin'";
		$data = $this->db->query($queryString.", fecha from cable_modem where mac_address='$mac' and fecha>'$fechaini' and fecha<'$fechafin'");
		return $data->result();
	}

	public function getConfig(){
		$CI = &get_instance();
		$this->db = $CI->load->database('default', TRUE);
		$data = $this->db->query("select limite_inferior, limite_superior, b.color as colors, a.clase_valor,a.tipo_stream
			from configuracion_valores a 
			inner join color b on b.idCOLOR=a.color
			where aparato='CM'
			order by tipo_stream,clase_valor, limite_inferior");
		return $data->result();
	}
}
