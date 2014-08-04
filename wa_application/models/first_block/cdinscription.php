<?php 
	class Cdusuario extends CI_Model
	{
		public function __construct() 
	    {
	        parent::__construct();
	        $this->load->database();
		}

		function insertar($idperson,$idevent,$theme,$status)
		{	if ($this->db->query("CALL SPRABMUsuario(1,2,'$usuario','$contrasenia','$id_sujeto','$sujeto','$active')")) 
			{	$query=$this->db->query("SELECT tbl.id_usuario, tbl.usuario, tbl.contrasenia, tbl.id_sujeto , tbl.active,
  					viw_sujeto.sujeto FROM tbl_usuario tbl INNER JOIN viw_sujeto
    				ON tbl.id_sujeto = viw_sujeto.id_sujeto order by tbl.id_usuario desc LIMIT 1");
				$data;
				foreach ($query->result() as $dato)
				{	$data=$dato;
				}
				return $data;
			}
		}
	}
?>