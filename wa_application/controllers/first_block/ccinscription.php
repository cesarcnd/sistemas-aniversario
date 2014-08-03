<?php
class Ccinscription extends CI_Controller
{	function insertar() 
	{	$idperson=$_REQUEST['idperson'];
		$idevent=$_REQUEST['idevent'];
		$theme=$_REQUEST['theme'];
		$status=$_REQUEST['status'];
		$this->data=array($this->cdinscription->insertar($idperson,$idevent,$theme,$status));
		//echo $this->load->view("module/manager/accion/accion_user",$this->data);
		echo json_encode($this->data);
	}
}
?>