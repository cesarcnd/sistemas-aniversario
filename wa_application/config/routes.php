<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "prev/c_portal";
$route['404_override'] = '';

$route['pre-inscribirse/eventos'] = "prev/c_portal/setInsertAttendance";



/* End of file routes.php */
/* Location: ./application/config/routes.php */