<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_portal extends CI_Controller {

	public function index()
	{
		$this->load->view('prev/v_portal');
	}

	function cargar_eventacademy()
	{	$query = "CALL SPRCNSEvent_Academy()";
		$query=$this->db->query($query);
		return $query->result_array();

	}

	function cargar_event()
	{	$this->DATA['eventos']=$this->cargar_eventacademy();
		echo $this->load->views('prev/module/list/inscription/l_inscription',$this->DATA);
	}
}