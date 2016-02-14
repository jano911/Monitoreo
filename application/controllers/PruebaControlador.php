<?php
header('Access-Control-Allow-Origin: *'); 

class PruebaControlador extends CI_Controller {

	public function suscriptores()
	{
        $data['username'] = $this->session->userdata('username');
        if($data['username']==""){
        	return $this->load->view('login');
        }else{
			return $this->load->view('suscriptores',$data);
		}
	}
	public function tarjetas()
	{
		$data = "Hola";
		return $this->load->view('tarjetas',$data);
	}
	public function getAllContracts()
	{
		$nombre = $this->input->get('nombre');
		if($nombre==""){
			$nombre="xxxxxxxxx";
		}
		//$nombre='ggdfgfdg';
		$contrato = $this->input->get('contrato');
		if($contrato==""){
			$contrato="0";
		}
		$mac = $this->input->get('mac');
		if($mac==""){
			$mac="cccccccccccc";
		}
		//echo $nombre.$contrato.$mac;
		$this->load->model("PruebaModelo");
		$data = $this->PruebaModelo->getallcontracts($contrato,$nombre,$mac);
		echo json_encode($data);
	}
	public function test()
	{
		$this->load->model("PruebaModelo");
		$data = $this->PruebaModelo->testM();
		$data = json_encode($data);
		echo $data;
		//echo json_encode($result);
	}

	public function getDataMac1(){
		$mac = $this->input->get('mac');
		$this->load->model("PruebaModelo");
		$data = $this->PruebaModelo->getdatamodalmac1($mac);
		echo json_encode($data);
	}

	public function getDataMac2(){
		$mac = $this->input->get('mac');
		$this->load->model("PruebaModelo");
		$data = $this->PruebaModelo->getdatamodalmac2($mac);
		//select snr as upsnr, us_power as uppotencia, snr_ds as dsnr, ds_power as dpotencia,ip_address as ip, indiceUp as upstream, indiceDown as downstream
		$res = array();
		$response = new stdClass();
		foreach ($data as $row) {
			$response->upsnr = (float)$row->upsnr;
			$response->uppotencia = (float)$row->uppotencia;
			$response->dsnr = (float)$row->dsnr;
			$response->dpotencia = (float)$row->dpotencia;
			$response->ip = $row->ip;
			$response->upstream = $row->upstream;
			$response->downstream = $row->downstream;
		}
		array_push($res, $response);
		//echo json_encode($data);
		echo json_encode($res);
	}

	public function getConfig(){
		$this->load->model("PruebaModelo");
		$data = $this->PruebaModelo->getConfig();
		$response = new stdClass();
		$response->rangos = array();
		foreach ($data as $row) {
			$objeto = new stdClass();
			$objeto->tipo = $row->tipo_stream;
			$objeto->valor = (int)$row->clase_valor;
			$objeto->colors = $row->colors;
			$objeto->limiteInferior = (float)$row->limite_inferior;
			$objeto->limiteSuperior = (float)$row->limite_superior;
			array_push($response->rangos, $objeto);
		}
		echo json_encode($response);
	}

	public function getDataGraph(){
		$mac = $this->input->get('mac');
		$fechaini = $this->input->get('fechaini');
		$fechafin = $this->input->get('fechafin');
		$upsnr = $this->input->get('upsnr');
		$dwsnr = $this->input->get('dwsnr');
		$uppower = $this->input->get('uppower');
		$dwpower = $this->input->get('dwpower');
		$this->load->model("PruebaModelo");
		$data = $this->PruebaModelo->getdatagraph($mac,$fechaini,$fechafin,$upsnr,$dwsnr,$uppower,$dwpower);
		//echo json_encode($data);
		if($dwsnr=="true"){
			//Primer Objeto
			$objeto = new stdClass();
			$objeto->type = "bar";
			$objeto->background_color = "#fff";
			$objeto->title = new stdClass();
			$objeto->title->background_color="#515151";
			$objeto->title->text="Downstream SNR";
			$objeto->title->adjust_layout=(boolean)true;
			//Segundo Objeto
			$objeto2 = new stdClass();
			$objeto->subtitle = new stdClass();
			$objeto->subtitle->text="Fecha inicial: ".$fechaini." - Fecha final: ".$fechafin;
			$objeto->subtitle->adjust_layout=(boolean)true;
			//Tercer Objeto
			$thirdObject = new stdClass();
			$objeto->scale_x = new stdClass();
			$fechainilinux = strtotime($fechaini);
			$objeto->scale_x->min_value = (($fechainilinux*1000)+25200000);
			$objeto->scale_x->step=(integer)300000;
			$objeto->scale_x->line_color="#333";
			$objeto->scale_x->zooming=(boolean)true;
			$objeto->scale_x->max_items=(integer)7;
			$objeto->scale_x->transform = new stdClass();
			$objeto->scale_x->transform->type="date";
			$objeto->scale_x->transform->all="%M %d %Y<br>%h:%i %A";
			//$objeto->scale_x->transform->all="%M %d %Y  %h:%i %A";
			$objeto->scale_x->transform->guide = new stdClass();
			$objeto->scale_x->transform->guide->visible=(boolean)false;
			$objeto->scale_x->transform->item = new stdClass();
			$objeto->scale_x->transform->item->visible=(boolean)false;
			$objeto->scale_x->label = new stdClass();
			$objeto->scale_x->label->text="Tiempo";
			$objeto->scale_x->label->font_color="#333";
			$objeto->scale_x->guide = new stdClass();
			$objeto->scale_x->guide->visible=(boolean)false;
			$objeto->scale_x->tick = new stdClass();
			$objeto->scale_x->tick->line_color="#333";
			//Forth Objeto
			$forthObject = new stdClass();
			$objeto->scale_y = new stdClass();
			$objeto->scale_y->step=(integer)50;
			$objeto->scale_y->line_color="#333";
			$objeto->scale_y->label = new stdClass();
			$objeto->scale_y->label->text="Valor";
			$objeto->scale_y->label->font_color="#333";
			$objeto->scale_y->guide = new stdClass();
			$objeto->scale_y->guide->line_style="solid";
			$objeto->scale_y->guide->line_color="#000000";
			$objeto->scale_y->tick = new stdClass();
			$objeto->scale_y->tick->line_color="#333";
			//Fifth Objeto
			$FifthObject = new stdClass();
			$objeto->scroll_x = new stdClass();
			$objeto->scroll_x->bar = new stdClass();
			$objeto->scroll_x->bar->background_color="#000";
			$objeto->scroll_x->handle = new stdClass();
			$objeto->scroll_x->handle->background_color="#76DF20";
			//Sixth Object
			$sixthObject = new stdClass();
			$objeto->zoom = new stdClass();
			$objeto->zoom->background_color="#20DFC6";
			//Seventh Object
			$seventhObject = new stdClass();
			$objeto->plot = new stdClass();
			$objeto->plot->line_width = (integer)3;
			$objeto->plot->max_trackers=(integer)9999;
			$objeto->plot->mode="normal";
			$objeto->plot->js_rule="myfuncDSS()";
			$objeto->plot->shadow=(boolean)false;
			$objeto->plot->marker = new stdClass();
			$objeto->plot->marker->type="none";
			//Eight Object
			$eightObject = new stdClass();
			$objeto->plotarea = new stdClass();
			$objeto->plotarea->adjust_layout = (boolean)true;
			$objeto->plotarea->margin_right=(integer)35;
			//Nineth Object
			$ninethObject = new stdClass();
			$objeto->tooltip = new stdClass();
			$objeto->tooltip->js_rule = "myfuncDSS()";
			$objeto->tooltip->shadow=(integer)0;
			$objeto->tooltip->font_color="#000";
			$objeto->tooltip->text="%k<br><br>%v<br>Valor";
			//$objeto->tooltip->text="%k    %v    Minutes";
			$objeto->tooltip->border_radius="5px";
			$objeto->tooltip->sticky=(boolean)true;
			$objeto->tooltip->timeout=(integer)10500;
			$objeto->tooltip->decimals=(integer)1;

			$fullResponse = new stdClass();
			$response = new stdClass();
			$vector="[";
			$objeto->series = array();
			$objetoSeries = new stdClass();
			$objetoSeries->values = array();
			foreach ($data as $row) {
				//$vector = $vector.$row->dsnr.",";
				array_push($objetoSeries->values, (float)$row->dsnr);
			}
			array_push($objeto->series, $objetoSeries);
			
			$fullResponse->graphset = array();
			//$fullResponse->graphset->type="bar";
			//$fullResponse->graphset->background_color="#fff";
			array_push($fullResponse->graphset, $objeto);
			//array_push($fullResponse->graphset, $response);
			$salida= json_encode($fullResponse);
			$salida=str_replace("_","-",$salida);
			echo $salida;
		}
		//$response = new stdClass();
		//$response->data = array();
		if($upsnr=="true"){
			//Primer Objeto
			$objeto = new stdClass();
			$objeto->type = "bar";
			$objeto->background_color = "#fff";
			$objeto->title = new stdClass();
			$objeto->title->background_color="#515151";
			$objeto->title->text="Upstream SNR";
			$objeto->title->adjust_layout=(boolean)true;
			//Segundo Objeto
			$objeto2 = new stdClass();
			$objeto->subtitle = new stdClass();
			$objeto->subtitle->text="Fecha inicial: ".$fechaini." - Fecha final: ".$fechafin;
			$objeto->subtitle->adjust_layout=(boolean)true;
			//Tercer Objeto
			$thirdObject = new stdClass();
			$objeto->scale_x = new stdClass();
			$fechainilinux = strtotime($fechaini);
			$objeto->scale_x->min_value = (($fechainilinux*1000)+25200000);
			$objeto->scale_x->step=(integer)300000;
			$objeto->scale_x->line_color="#333";
			$objeto->scale_x->zooming=(boolean)true;
			$objeto->scale_x->max_items=(integer)7;
			$objeto->scale_x->transform = new stdClass();
			$objeto->scale_x->transform->type="date";
			$objeto->scale_x->transform->all="%M %d %Y<br>%h:%i %A";
			//$objeto->scale_x->transform->all="%M %d %Y  %h:%i %A";
			$objeto->scale_x->transform->guide = new stdClass();
			$objeto->scale_x->transform->guide->visible=(boolean)false;
			$objeto->scale_x->transform->item = new stdClass();
			$objeto->scale_x->transform->item->visible=(boolean)false;
			$objeto->scale_x->label = new stdClass();
			$objeto->scale_x->label->text="Tiempo";
			$objeto->scale_x->label->font_color="#333";
			$objeto->scale_x->guide = new stdClass();
			$objeto->scale_x->guide->visible=(boolean)false;
			$objeto->scale_x->tick = new stdClass();
			$objeto->scale_x->tick->line_color="#333";
			//Forth Objeto
			$forthObject = new stdClass();
			$objeto->scale_y = new stdClass();
			$objeto->scale_y->step=(integer)50;
			$objeto->scale_y->line_color="#333";
			$objeto->scale_y->label = new stdClass();
			$objeto->scale_y->label->text="Valor";
			$objeto->scale_y->label->font_color="#333";
			$objeto->scale_y->guide = new stdClass();
			$objeto->scale_y->guide->line_style="solid";
			$objeto->scale_y->guide->line_color="#000000";
			$objeto->scale_y->tick = new stdClass();
			$objeto->scale_y->tick->line_color="#333";
			//Fifth Objeto
			$FifthObject = new stdClass();
			$objeto->scroll_x = new stdClass();
			$objeto->scroll_x->bar = new stdClass();
			$objeto->scroll_x->bar->background_color="#000";
			$objeto->scroll_x->handle = new stdClass();
			$objeto->scroll_x->handle->background_color="#76DF20";
			//Sixth Object
			$sixthObject = new stdClass();
			$objeto->zoom = new stdClass();
			$objeto->zoom->background_color="#20DFC6";
			//Seventh Object
			$seventhObject = new stdClass();
			$objeto->plot = new stdClass();
			$objeto->plot->line_width = (integer)3;
			$objeto->plot->max_trackers=(integer)9999;
			$objeto->plot->mode="normal";
			$objeto->plot->js_rule="myfuncUSS()";
			$objeto->plot->shadow=(boolean)false;
			$objeto->plot->marker = new stdClass();
			$objeto->plot->marker->type="none";
			//Eight Object
			$eightObject = new stdClass();
			$objeto->plotarea = new stdClass();
			$objeto->plotarea->adjust_layout = (boolean)true;
			$objeto->plotarea->margin_right=(integer)35;
			//Nineth Object
			$ninethObject = new stdClass();
			$objeto->tooltip = new stdClass();
			$objeto->tooltip->js_rule = "myfuncUSS()";
			$objeto->tooltip->shadow=(integer)0;
			$objeto->tooltip->font_color="#000";
			$objeto->tooltip->text="%k<br><br>%v<br>Valor";
			//$objeto->tooltip->text="%k  %v  Minutes";
			$objeto->tooltip->border_radius="5px";
			$objeto->tooltip->sticky=(boolean)true;
			$objeto->tooltip->timeout=(integer)10500;
			$objeto->tooltip->decimals=(integer)1;

			$fullResponse = new stdClass();
			$response = new stdClass();
			$vector="[";
			$objeto->series = array();
			$objetoSeries = new stdClass();
			$objetoSeries->values = array();
			foreach ($data as $row) {
				//$vector = $vector.$row->dsnr.",";
				array_push($objetoSeries->values, (float)$row->upsnr);
			}
			array_push($objeto->series, $objetoSeries);
			
			$fullResponse->graphset = array();
			//$fullResponse->graphset->type="bar";
			//$fullResponse->graphset->background_color="#fff";
			array_push($fullResponse->graphset, $objeto);
			//array_push($fullResponse->graphset, $response);
			$salida= json_encode($fullResponse);
			$salida=str_replace("_","-",$salida);
			echo $salida;
		}
		
		//$response = new stdClass();
		//$response->data = array();
		if($uppower=="true"){
			//Primer Objeto
			$objeto = new stdClass();
			$objeto->type = "bar";
			$objeto->background_color = "#fff";
			$objeto->title = new stdClass();
			$objeto->title->background_color="#515151";
			$objeto->title->text="Upstream Power";
			$objeto->title->adjust_layout=(boolean)true;
			//Segundo Objeto
			$objeto2 = new stdClass();
			$objeto->subtitle = new stdClass();
			$objeto->subtitle->text="Fecha inicial: ".$fechaini." - Fecha final: ".$fechafin;
			$objeto->subtitle->adjust_layout=(boolean)true;
			//Tercer Objeto
			$thirdObject = new stdClass();
			$objeto->scale_x = new stdClass();
			$fechainilinux = strtotime($fechaini);
			$objeto->scale_x->min_value = (($fechainilinux*1000)+25200000);
			$objeto->scale_x->step=(integer)300000;
			$objeto->scale_x->line_color="#333";
			$objeto->scale_x->zooming=(boolean)true;
			$objeto->scale_x->max_items=(integer)7;
			$objeto->scale_x->transform = new stdClass();
			$objeto->scale_x->transform->type="date";
			$objeto->scale_x->transform->all="%M %d %Y<br>%h:%i %A";
			//$objeto->scale_x->transform->all="%M %d %Y  %h:%i %A";
			$objeto->scale_x->transform->guide = new stdClass();
			$objeto->scale_x->transform->guide->visible=(boolean)false;
			$objeto->scale_x->transform->item = new stdClass();
			$objeto->scale_x->transform->item->visible=(boolean)false;
			$objeto->scale_x->label = new stdClass();
			$objeto->scale_x->label->text="Tiempo";
			$objeto->scale_x->label->font_color="#333";
			$objeto->scale_x->guide = new stdClass();
			$objeto->scale_x->guide->visible=(boolean)false;
			$objeto->scale_x->tick = new stdClass();
			$objeto->scale_x->tick->line_color="#333";
			//Forth Objeto
			$forthObject = new stdClass();
			$objeto->scale_y = new stdClass();
			$objeto->scale_y->step=(integer)50;
			$objeto->scale_y->line_color="#333";
			$objeto->scale_y->label = new stdClass();
			$objeto->scale_y->label->text="Valor";
			$objeto->scale_y->label->font_color="#333";
			$objeto->scale_y->guide = new stdClass();
			$objeto->scale_y->guide->line_style="solid";
			$objeto->scale_y->guide->line_color="#000000";
			$objeto->scale_y->tick = new stdClass();
			$objeto->scale_y->tick->line_color="#333";
			//Fifth Objeto
			$FifthObject = new stdClass();
			$objeto->scroll_x = new stdClass();
			$objeto->scroll_x->bar = new stdClass();
			$objeto->scroll_x->bar->background_color="#000";
			$objeto->scroll_x->handle = new stdClass();
			$objeto->scroll_x->handle->background_color="#76DF20";
			//Sixth Object
			$sixthObject = new stdClass();
			$objeto->zoom = new stdClass();
			$objeto->zoom->background_color="#20DFC6";
			//Seventh Object
			$seventhObject = new stdClass();
			$objeto->plot = new stdClass();
			$objeto->plot->line_width = (integer)3;
			$objeto->plot->max_trackers=(integer)9999;
			$objeto->plot->mode="normal";
			$objeto->plot->js_rule="myfuncUSP()";
			$objeto->plot->shadow=(boolean)false;
			$objeto->plot->marker = new stdClass();
			$objeto->plot->marker->type="none";
			//Eight Object
			$eightObject = new stdClass();
			$objeto->plotarea = new stdClass();
			$objeto->plotarea->adjust_layout = (boolean)true;
			$objeto->plotarea->margin_right=(integer)35;
			//Nineth Object
			$ninethObject = new stdClass();
			$objeto->tooltip = new stdClass();
			$objeto->tooltip->js_rule = "myfuncUSP()";
			$objeto->tooltip->shadow=(integer)0;
			$objeto->tooltip->font_color="#000";
			$objeto->tooltip->text="%k<br><br>%v<br>Valor";
			//$objeto->tooltip->text="%k   %v  Minutes";
			$objeto->tooltip->border_radius="5px";
			$objeto->tooltip->sticky=(boolean)true;
			$objeto->tooltip->timeout=(integer)10500;
			$objeto->tooltip->decimals=(integer)1;

			$fullResponse = new stdClass();
			$response = new stdClass();
			$vector="[";
			$objeto->series = array();
			$objetoSeries = new stdClass();
			$objetoSeries->values = array();
			foreach ($data as $row) {
				//$vector = $vector.$row->dsnr.",";
				array_push($objetoSeries->values, (float)$row->uppotencia);
			}
			array_push($objeto->series, $objetoSeries);
			
			$fullResponse->graphset = array();
			//$fullResponse->graphset->type="bar";
			//$fullResponse->graphset->background_color="#fff";
			array_push($fullResponse->graphset, $objeto);
			//array_push($fullResponse->graphset, $response);
			$salida= json_encode($fullResponse);
			$salida=str_replace("_","-",$salida);
			echo $salida;
		}
		
		//$response = new stdClass();
		//$response->data = array();
		if($dwpower=="true"){
			//Primer Objeto
			$objeto = new stdClass();
			$objeto->type = "bar";
			$objeto->background_color = "#fff";
			$objeto->title = new stdClass();
			$objeto->title->background_color="#515151";
			$objeto->title->text="Downstream Power";
			$objeto->title->adjust_layout=(boolean)true;
			//Segundo Objeto
			$objeto2 = new stdClass();
			$objeto->subtitle = new stdClass();
			$objeto->subtitle->text="Fecha inicial: ".$fechaini." - Fecha final: ".$fechafin;
			$objeto->subtitle->adjust_layout=(boolean)true;
			//Tercer Objeto
			$thirdObject = new stdClass();
			$objeto->scale_x = new stdClass();
			$fechainilinux = strtotime($fechaini);
			$objeto->scale_x->min_value = (($fechainilinux*1000)+25200000);
			$objeto->scale_x->step=(integer)300000;
			$objeto->scale_x->line_color="#333";
			$objeto->scale_x->zooming=(boolean)true;
			$objeto->scale_x->max_items=(integer)7;
			$objeto->scale_x->transform = new stdClass();
			$objeto->scale_x->transform->type="date";
			$objeto->scale_x->transform->all="%M %d %Y<br>%h:%i %A";
			//$objeto->scale_x->transform->all="%M %d %Y  %h:%i %A";
			$objeto->scale_x->transform->guide = new stdClass();
			$objeto->scale_x->transform->guide->visible=(boolean)false;
			$objeto->scale_x->transform->item = new stdClass();
			$objeto->scale_x->transform->item->visible=(boolean)false;
			$objeto->scale_x->label = new stdClass();
			$objeto->scale_x->label->text="Tiempo";
			$objeto->scale_x->label->font_color="#333";
			$objeto->scale_x->guide = new stdClass();
			$objeto->scale_x->guide->visible=(boolean)false;
			$objeto->scale_x->tick = new stdClass();
			$objeto->scale_x->tick->line_color="#333";
			//Forth Objeto
			$forthObject = new stdClass();
			$objeto->scale_y = new stdClass();
			$objeto->scale_y->step=(integer)10;
			$objeto->scale_y->line_color="#333";
			$objeto->scale_y->label = new stdClass();
			$objeto->scale_y->label->text="Valor";
			$objeto->scale_y->label->font_color="#333";
			$objeto->scale_y->guide = new stdClass();
			$objeto->scale_y->guide->line_style="solid";
			$objeto->scale_y->guide->line_color="#000000";
			$objeto->scale_y->tick = new stdClass();
			$objeto->scale_y->tick->line_color="#333";
			//Fifth Objeto
			$FifthObject = new stdClass();
			$objeto->scroll_x = new stdClass();
			$objeto->scroll_x->bar = new stdClass();
			$objeto->scroll_x->bar->background_color="#000";
			$objeto->scroll_x->handle = new stdClass();
			$objeto->scroll_x->handle->background_color="#76DF20";
			//Sixth Object
			$sixthObject = new stdClass();
			$objeto->zoom = new stdClass();
			$objeto->zoom->background_color="#20DFC6";
			//Seventh Object
			$seventhObject = new stdClass();
			$objeto->plot = new stdClass();
			$objeto->plot->line_width = (integer)3;
			$objeto->plot->max_trackers=(integer)9999;
			$objeto->plot->mode="normal";
			$objeto->plot->js_rule="myfuncDSP()";
			$objeto->plot->shadow=(boolean)false;
			$objeto->plot->marker = new stdClass();
			$objeto->plot->marker->type="none";
			//Eight Object
			$eightObject = new stdClass();
			$objeto->plotarea = new stdClass();
			$objeto->plotarea->adjust_layout = (boolean)true;
			$objeto->plotarea->margin_right=(integer)35;
			//Nineth Object
			$ninethObject = new stdClass();
			$objeto->tooltip = new stdClass();
			$objeto->tooltip->js_rule = "myfuncDSP()";
			$objeto->tooltip->shadow=(integer)5;
			$objeto->tooltip->font_color="#000";
			$objeto->tooltip->text="%k<br><br>%v<br>Valor";
			//$objeto->tooltip->text="%k  %v  Minutes";
			$objeto->tooltip->border_radius="5px";
			$objeto->tooltip->sticky=(boolean)true;
			$objeto->tooltip->timeout=(integer)10500;
			$objeto->tooltip->decimals=(integer)1;

			$fullResponse = new stdClass();
			$response = new stdClass();
			$vector="[";
			$objeto->series = array();
			$objetoSeries = new stdClass();
			$objetoSeries->values = array();
			foreach ($data as $row) {
				//$vector = $vector.$row->dsnr.",";
				array_push($objetoSeries->values, (float)$row->dpotencia);
			}
			array_push($objeto->series, $objetoSeries);
			
			$fullResponse->graphset = array();
			array_push($fullResponse->graphset, $objeto);
			//array_push($fullResponse->graphset, $response);
			$salida= json_encode($fullResponse);
			$salida=str_replace("_","-",$salida);
			echo $salida;
		}
		
	}
}

