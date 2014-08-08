<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "prev/c_portal";
$route['404_override'] = "welcome/not_found";

$route['pre-inscribirse/module'] = "prev/c_portal/loadPreInscription";
$route['pre-inscribirse/eventos'] = "prev/c_portal/setInsertAttendance";

$route['informacion/noticias/todos'] = "prev/c_interior/getNoticeAll/$1";
$route['informacion/noticia/([a-zA-Z0-9_-]+)/todos'] = "prev/c_interior/getNoticeSection/$1";
$route['informacion/([a-zA-Z0-9_-]+)/detalle'] = "prev/c_interior/getNoticeDetail/$1";

$route['galeria/fotos/todos'] = "prev/c_interior/getGalleryPhotoAll";
$route['galeria/fotos/([a-zA-Z0-9_-]+)/detalle'] = "prev/c_interior/getGalleryPhoto/$1";
$route['galeria/videos/todos'] = "prev/c_interior/getGalleryVideoAll";
$route['galeria/videos/([a-zA-Z0-9_-]+)/detalle'] = "prev/c_interior/getGalleryVideo/$1";

$route['programacion/aniversario/todos']='prev/c_interior/getProgramming';
$route['feria-proyectos/aniversario/todos']='prev/c_interior/getProject';
$route['conferencia/aniversario/todos']='prev/c_interior/getConference';
$route['talleres/aniversario/todos']='prev/c_interior/getTaller';
$route['concursos/aniversario/todos']='prev/c_interior/getConcurso';
/* End of file routes.php */
/* Location: ./application/config/routes.php */