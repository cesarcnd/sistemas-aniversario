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

	function getVideoDetail($param){
		$this->load->database();
		$query=$this->db->select('vi.title_video as title_video, vi.url_video as url_video, vi.image_video as image,vi.id_video_youtube as youtube');
		$this->db->from('wa_video vi');
		$this->db->where('vi.active',1);
		$this->db->where('vi.url_video',$param);
		$query =$this->db->get();
		return $query->result_array(); 
	}
}