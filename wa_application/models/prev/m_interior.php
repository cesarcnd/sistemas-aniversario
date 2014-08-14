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

	function getNoticeDetail($param){
		$this->load->database();
		$query=$this->db->select('no.title_notice as title_notice,im.image as image,im.type_image,no.content_notice,sn.name_section_notice as section, sn.url_section_notice as url_section');
		$this->db->select('DATE_FORMAT(no.date_notice,"%W, %d de %M de %Y") as date_notice',false);
		$this->db->from('wa_image_notice tin');
		$this->db->join('wa_notice no','tin.id_notice = no.id_notice');
		$this->db->join('wa_image im','tin.id_image = im.id_image');
		$this->db->join('wa_section_notice sn','sn.id_section_notice = no.id_section_notice');
		$this->db->where('tin.active',1);
		$this->db->where('no.url_notice',$param);
		$query =$this->db->get();
		return $query->result_array(); 
	}

	
	function getNoticeAll(){
			$this->load->database();
			$query=$this->db->select('wn.title_notice , wn.content_notice , wn.url_notice, wi.image, wi.type_image, wsn.name_section_notice, wsn.url_section_notice');
			$this->db->select('DATE_FORMAT(wn.date_notice,"%d de %M de %Y") as date_notice_large',false);
			$this->db->select('DATE_FORMAT(wn.date_notice,"%d") as day_short',false);
			$this->db->select('DATE_FORMAT(wn.date_notice,"%b") as month_short',false);
			$this->db->from('wa_notice wn');
			$this->db->join('wa_image_notice win','win.id_notice=wn.id_notice');
			$this->db->join('wa_image wi',' win.id_image = wi.id_image');
			$this->db->join('wa_section_notice wsn','wsn.id_section_notice = wn.id_section_notice');
			$this->db->where('win.active','1');
			$this->db->order_by('wn.dateregister','desc');
			$query=$this->db->get();
			return $query->result_array();
	}

	function getNoticeSection($param){
			$this->load->database();
			$query=$this->db->select('wn.title_notice , wn.content_notice , wn.url_notice, wi.image, wi.type_image, wsn.name_section_notice, wsn.url_section_notice');
			$this->db->select('DATE_FORMAT(wn.date_notice,"%d de %M de %Y") as date_notice_large',false);
			$this->db->select('DATE_FORMAT(wn.date_notice,"%d") as day_short',false);
			$this->db->select('DATE_FORMAT(wn.date_notice,"%b") as month_short',false);
			$this->db->from('wa_notice wn');
			$this->db->join('wa_image_notice win','win.id_notice=wn.id_notice');
			$this->db->join('wa_image wi',' win.id_image = wi.id_image');
			$this->db->join('wa_section_notice wsn','wsn.id_section_notice = wn.id_section_notice');
			$this->db->where('win.active','1');
			$this->db->where('wsn.url_section_notice',$param);
			$this->db->order_by('wn.dateregister','desc');
			$query=$this->db->get();
			return $query->result_array();
	}
}