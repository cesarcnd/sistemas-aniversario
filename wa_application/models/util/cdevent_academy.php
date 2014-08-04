<?php
class Cdevent_academy extends CI_Model{
	public function __construct()
	{	parent::__construct();
		$this->load->database();
	}

	
	function cargar_eventacademy()
	{	$query = "CALL SPRCNSEvent_Academy()";
		$query=$this->db->query($query);
		return $query->result_array();
	}
}