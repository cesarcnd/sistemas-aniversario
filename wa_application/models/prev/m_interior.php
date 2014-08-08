<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_interior extends CI_Model{
	function getGalleryPhotoAll(){
		$this->load->database();
		$query=$this->db->select('gi.title_gallery_image as title_gallery_image, gi.url_gallery_image as url_gallery_image, im.image as image,im.type_image as type_image');
		$this->db->from('wa_image im');
		$this->db->join('wa_gallery_image gi','gi.id_gallery_image = im.id_gallery_image');
		$this->db->where('gi.active',1);
		$this->db->where('im.front_gallery',1);
		$this->db->order_by('gi.dateregister','desc');
		$query =$this->db->get();
		return $query->result_array(); 
	}
}