<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Resource_util {
	function img_change_local($new_infos,$front="")
    {   $data_front=array();
        $CI =& get_instance();
        $CI->load->helper('url');
        foreach($new_infos as $new_info)
        {   if($new_info['type_image']=='L')
            {   $img=$new_info['image'];
                switch ($front) {
                    case 0:$new_info['image']=base_url().'resource/image/body/images/front-600/'.$img;break;
                    case 1:$new_info['image']=base_url().'resource/image/body/images/front-1024/'.$img;break;
                }
                array_push($data_front, $new_info);
            }
            else{
                array_push($data_front, $new_info);
            }
        }
        return $data_front;
    }
    function prev_time($fecha_unix){
        $CI =& get_instance();
        $ahora=time(); //obtener la hora en formato unix
        $segundos=$ahora-$fecha_unix; //obtener la diferencia de segundos
        $semana=floor($segundos/604800);
        $dias=floor($segundos/86400); //dias es la division de n segs entre 86400 segundos que representa un dia;
        $mod_hora=$segundos%86400; //mod_hora es el sobrante, en horas, de la division de días; 
        $horas=floor($mod_hora/3600); //hora es la division entre el sobrante de horas y 3600 segundos que representa una hora;
        $mod_minuto=$mod_hora%3600; //mod_minuto es el sobrante, en minutos, de la division de horas;   
        $minutos=floor($mod_minuto/60); //minuto es la division entre el sobrante y 60 segundos que representa un minuto;
        $lang_second=($CI->session->userdata("lang")==null||$CI->session->userdata("lang")=='spanish')?'Hace unos segundos.':'A few seconds ago.';
        if ($minutos<=0 && $semana<=0 && $dias<=0 && $horas<=0) {
            return $lang_second;
        }
        elseif($horas<=0 && $semana<=0 && $dias<=0 ){
            $s = ($minutos>0) ? 's' : '' ;
            if($CI->session->userdata("lang")==null||$CI->session->userdata("lang")=='spanish'){
                return 'Hace '.$minutos.' minuto'.$s;
            }else{
                return $minutos.' minute'.$s.' ago';
            }
        }elseif($dias<=0 && $semana<=0){
            $s = ($horas>0) ? 's' : '' ;
            if($CI->session->userdata("lang")==null||$CI->session->userdata("lang")=='spanish'){
                return 'Hace '.$horas.' hora'.$s;
            }else{
                return $horas.' hour'.$s.' ago';
            }
        }elseif ($semana<=0) {
            $s = ($dias>1) ? 's' : '' ;
            if($CI->session->userdata("lang")==null||$CI->session->userdata("lang")=='spanish'){
                return 'Hace '.$dias.' dia'.$s;
            }else{
                return $dias.' day'.$s.' ago';
            }
        }elseif ($semana<=1 && $semana > 0) {
            $s = ($semana>1) ? 's' : '' ;
            if($CI->session->userdata("lang")==null||$CI->session->userdata("lang")=='spanish'){
                return 'Hace '.$semana.' semana'.$s;
            }else{
                return $semana.' week'.$s.' ago';
            }
        }
        else{
            return null;
        }
    }
    function paginationWeb($uri,$per_page,$uri_segment,$total_rows,$lang,$type=1,$key=''){
        $CI =& get_instance();
        $CI->load->library('pagination');
        switch ($type) {
            case 1:$total_rows=$total_rows;break;
            case 2:$total_rows=$total_rows[0][$key];break;
        }
        $config['base_url'] = $uri;
        //$config['num_links'] = '2';
        $config['per_page'] = $per_page;
        $config['uri_segment'] = $uri_segment;
        $config['prev_link'] = ($lang==null||$lang=='spanish')?'Anterior':'Prev'; 
        $config['next_link'] = ($lang==null||$lang=='spanish')?'Siguiente':'Next'; ;
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $config['total_rows'] = $total_rows;

        $CI->pagination->initialize($config);
    }
}