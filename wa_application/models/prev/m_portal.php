<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_portal extends CI_Model{
	function getListFront(){
		$this->load->database();
		$query=$this->db->select('no.title_notice as title_new, no.url_notice as url_new,im.image as image,im.type_image');
		$this->db->from('wa_image_notice tin');
		$this->db->join('wa_notice no','tin.id_notice = no.id_notice');
		$this->db->join('wa_image im','tin.id_image = im.id_image');
		$this->db->where('tin.active',1);
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
}