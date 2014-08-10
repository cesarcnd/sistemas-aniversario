<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_portal extends CI_Controller {

	public function index()
	{
		$this->getUtil();
		$this->DATA['fronts']=$this->resource_util->img_change_local($this->m_portal->getListFront(),1);
		$this->DATA['photos']=$this->resource_util->img_change_local($this->m_portal->getGalleryImage(),0);
		$this->DATA['videos']=$this->m_portal->getGalleryVideo();
		$this->DATA['list_file']=$this->m_portal->getListFile();
		$this->DATA['file']=$this->m_portal->getAllFile();
		$this->load->view('prev/v_portal',$this->DATA);
	}

	public function not_found(){
		$this->DATA['title_page']='Pagina no encontrada';
		$this->DATA['title']='Pagina no encontrada';
		$this->DATA['interior']='not_found';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	
	public function getUtil(){
		$this->load->model('prev/m_portal');
		$this->load->library('resource_util');
	}

	public function loadPreInscription(){
		$this->getUtil();
		$this->DATA['eventos']=$this->m_portal->getListTheme();
		$this->load->view('prev/module/list/inscription/l_inscription',$this->DATA);
	}

	public function setInsertAttendance(){
		$this->getUtil();
		$estudiante = $this->input->post('estudiante');
		$dni=$this->input->post('dni');
		$id_event_academy=$this->input->post('id_event_academy');
		$attendance=$this->input->post('attendance');
		
		if($estudiante!=''){
			$result=$this->m_portal->setInsertAttendanceStudent($attendance,$id_event_academy,$dni);
			$this->DATA['text']="Hola! $attendance, la pre - inscripción se ha realizado con éxito, el pago lo puede realizar a su delegado";
		}else{
			$result=$this->m_portal->setInsertAttendanceNew($attendance,$id_event_academy,$dni);
			$this->DATA['text']="Hola! $attendance, la pre - inscripción se ha realizado con éxito, el pago lo puede realizar el mismo día del evento";
		}
		
		if($result){
			$this->load->view('prev/module/list/inscription/l_success_inscription',$this->DATA);
		}
	}
}