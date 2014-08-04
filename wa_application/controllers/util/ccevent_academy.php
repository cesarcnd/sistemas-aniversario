<?php
class Ccevent_academy extends CI_Controller{
	public function __construct()
	{	parent::__construct();
		$this->load->helper('url');
		$this->load->model('util/Cdevent_academy');
	}
	function cargar_eventacademy()
	{	$this->DATA['eventos']=$this->Cdevent_academy->cargar_eventacademy();
		echo $this->load->view('util/combo_eventacademy',$this->DATA);
	}
}