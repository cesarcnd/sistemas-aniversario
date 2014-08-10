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

	function getGalleryFotoDetail($param){
		$this->load->database();
		$id_gallery_image=$this->getIdGalleryFoto($param);
		$query = $this->db->select('im.title_image, im.url_image, im.image, im.label, im.type_image');
		$this->db->from('wa_image im');
		$this->db->where('im.active',1);
		$this->db->where('im.id_gallery_image',$id_gallery_image);
		$this->db->order_by('im.dateregister','desc');
		$query =$this->db->get();
		return $query->result_array(); 
	}

	function getIdGalleryFoto($param){
		$this->load->database();
		$query = $this->db->select('gi.id_gallery_image');
		$this->db->where('gi.url_gallery_image',$param);
		$this->db->where('gi.active',1);
		$query = $this->db->get('wa_gallery_image gi');
		$id=$query->result_array();
		return $id[0]['id_gallery_image'];
	}

	function getVideoAll(){
		$this->load->database();
		$query=$this->db->select('vi.title_video as title_video, vi.url_video as url_video, vi.image_video as image');
		$this->db->from('wa_video vi');
		$this->db->where('vi.active',1);
		$this->db->order_by('vi.dateregister','desc');
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