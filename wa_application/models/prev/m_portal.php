<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_portal extends CI_Model{
	function getListFront(){
		$this->load->database();
		$query=$this->db->select('no.title_notice as title_new, no.url_notice as url_new,im.image as image,im.type_image');
		$this->db->from('wa_image_notice tin');
		$this->db->join('wa_notice no','tin.id_notice = no.id_notice');
		$this->db->join('wa_image im','tin.id_image = im.id_image');
		$this->db->where('tin.active',1);
		$this->db->where('no.front',1);
		$this->db->order_by('no.dateregister','desc');
		$query =$this->db->get();
		return $query->result_array(); 
	}
	function getListTheme(){
		$this->load->database();
		$query=$this->db->select('wa.id_event_academy, wa.theme');
		$this->db->from('wa_event_academy wa');
		$this->db->where('wa.active',1);
		$query =$this->db->get();
		return $query->result_array(); 
	}

	function setInsertAttendanceStudent($attendance,$id_event_academy,$dni){
		$this->load->database();
		$queyConsult=$this->db->select('pe.id_person');
		$this->db->where('pe.number_document',$dni);
		$queyConsult=$this->db->get('wa_person pe');
		$queyConsult=$queyConsult->result_array(); 
		$idPerson = $queyConsult[0]['id_person'];

		$data = array('id_person'=>$idPerson,'id_event_academy'=>$id_event_academy,'status'=>'P','active'=>'1');
		$result = $this->db->insert('wa_event_academy_attendance',$data);
		return $result;
	}

	function setInsertAttendanceNew($attendance,$id_event_academy,$dni){
		$this->load->database();	

		$data = array('name_favorite'=>$attendance,'number_document'=>$dni,'type_person'=>'V','active'=>'1','id_country'=>1);
		$this->db->insert('wa_person',$data);
		$idPerson = $this->db->insert_id();

		$data = array('id_person'=>$idPerson,'id_event_academy'=>$id_event_academy,'status'=>'P','active'=>'1');
		$result=$this->db->insert('wa_event_academy_attendance',$data);

		return $result;
	}

	function getGalleryImage(){
		$this->load->database();
		$query=$this->db->select('gi.title_gallery_image as title_gallery_image, gi.url_gallery_image as url_gallery_image, im.image as image,im.type_image as type_image');
		$this->db->from('wa_image im');
		$this->db->join('wa_gallery_image gi','gi.id_gallery_image = im.id_gallery_image');
		$this->db->where('gi.active',1);
		$this->db->where('im.front_gallery',1);
		$query =$this->db->get();
		return $query->result_array(); 
	}
}