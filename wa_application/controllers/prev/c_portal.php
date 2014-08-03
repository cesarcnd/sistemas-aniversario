<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_portal extends CI_Controller {

	public function index()
	{
		$this->getUtil();
		$this->DATA['fronts']=$this->resource_util->img_change_local($this->m_portal->getListFront(),1);
		$this->load->view('prev/v_portal',$this->DATA);
	}

	public function getUtil(){
		$this->load->model('prev/m_portal');
		$this->load->library('resource_util');
	}
}