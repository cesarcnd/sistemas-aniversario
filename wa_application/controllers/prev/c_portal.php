<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_portal extends CI_Controller {

	public function index()
	{
		$this->load->view('prev/v_portal');
	}
}