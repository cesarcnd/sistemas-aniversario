<?php
class Ccinscription extends CI_Controller
{	function insertar() 
	{	$idperson=$_REQUEST['idperson'];
		$idevent=$_REQUEST['idevent'];
		$theme=$_REQUEST['theme'];
		$status=$_REQUEST['status'];
		$this->data=array($this->cdusuario->insertar($usuario,$contrasenia,$id_sujeto,$active));
		//echo $this->load->view("module/manager/accion/accion_user",$this->data);
		echo json_encode($this->data);
	}
}