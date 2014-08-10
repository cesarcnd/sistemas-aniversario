<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_interior extends CI_Controller {
	public function getUtil(){
		$this->load->model('prev/m_interior');
	}
	public function not_found(){
		$this->DATA['title_page']='Pagina no encontrada';
		$this->DATA['title']='Pagina no encontrada';
		$this->DATA['interior']='not_found';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getNoticeAll($param){
		$this->DATA['title_page']='Noticias';
		$this->DATA['title']='Noticias';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getNoticeSection($param){
		$this->DATA['title_page']='Noticias';
		$this->DATA['title']='Noticias';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getNoticeDetail($param){
		$this->DATA['title_page']='Noticias';
		$this->DATA['title']='Noticias';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getGalleryPhotoAll(){
		$this->getUtil();
		$this->DATA['galeria_fotos']=$this->m_interior->getGalleryPhotoAll();
		$this->DATA['title_page']='Galeria de Fotos';
		$this->DATA['title']='Galeria de Fotos';
		$this->DATA['interior']='foto/i_gallery_photo_all';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getGalleryPhoto($param){
		$this->DATA['title_page']='Galeria de Videos';
		$this->DATA['title']='Galeria de Videos';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getGalleryVideoAll(){
		$this->DATA['title_page']='Galeria de Videos';
		$this->DATA['title']='Galeria de Videos';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getGalleryVideo($param){
		$this->load->model('prev/m_interior');
		$this->DATA['title_page']='Galeria de Videos';
		$this->DATA['title']='Galeria de Videos';
		$this->DATA['interior']='video/i_gallery_video';
		$this->DATA['videos']=$this->m_interior->getVideoDetail($param);
		$this->load->view('prev/v_interior_general',$this->DATA);
	}

	public function getProgramming(){
		$this->DATA['title_page']='Programacion de aniversario';
		$this->DATA['title']='Programacion de aniversario';
		$this->DATA['interior']='programming/programming';
		$this->load->view('prev/v_interior_detail',$this->DATA);
	}
	public function getProject(){
		$this->DATA['title_page']='Feria de Proyectos';
		$this->DATA['title']='Feria de Proyectos';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getConference(){
		$this->DATA['title_page']='Feria de Proyectos';
		$this->DATA['title']='Feria de Proyectos';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getTaller(){
		$this->DATA['title_page']='Talleres';
		$this->DATA['title']='Talleres';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
	public function getConcurso(){
		$this->DATA['title_page']='Concursos';
		$this->DATA['title']='Concursos';
		$this->DATA['interior']='construction';
		$this->load->view('prev/v_interior_general',$this->DATA);
	}
}