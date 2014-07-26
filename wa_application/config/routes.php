<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
Este archivo le permite asignar re-peticiones de URI a las funciones de control específicas.
|
| Típicamente hay una relación de uno a uno entre una serie de URL
| Y su correspondiente controlador clase / método. Los segmentos en un
| URL normalmente sigue este patrón:
|
| Example.com / clase / método / id /
|
| En algunos casos, sin embargo, es posible que desee reasignar esta relación
| De modo que una clase diferente / función se llama a la que
| Correspondiente a la URL.
|
| Por favor, consulte la guía de usuario para obtener información detallada:
|
| http://codeigniter.com/user_guide/general/routing.html
|
| ------------------------------------------------- ------------------------
| RUTAS RESERVADOS
| ------------------------------------------------- ------------------------
|
| Hay dos rutas de la zona del reservados:
|
| $ Route ['default_controller'] = 'welcome';
|
| Esta ruta indica qué clase controlador debe cargarse si la
| URI no contiene datos. En el ejemplo anterior, la "welcome" clase
| Sería cargado.
|
| $ Ruta ['404_override '] =' errores / page_missing ';
|
| Esta ruta le dirá al router qué segmentos de URI para utilizar si los previstos
| En el URL no puede ser igualada a una ruta válida.

| ---------------------------------------------------------------------------
| CESAR NICHO DIAZ
| ---------------------------------------------------------------------------
| Routes lo que hace es que si la URL contiene coincidencia con la clave del array, entonces
| remapeara a la clase que se esta estableciendo. O también se puede decir el primer segmento
| que encuentre es igual a la clave entonces remapeara a lo que se establece
| Son como alias
| EJEMPLOS:
| 	$route['producto/fresa']='catalogo/producto/32';
|	Es decir si encontramos 'producto/fresa' esto se remapeara a la clase 'catalogo',
|   metodo 'producto' y como parámetro 32.
*/

$route['default_controller'] = "welcome";

/*
| Esta ruta indica qué clase controlador debe cargarse si la
| URI no contiene datos. En el ejemplo anterior, la "welcome" clase
| Sería cargado. Es decir si colocamos en la URL = http//:nombre_proyecto
| en este momento se activa este controlador
*/

$route['404_override'] = '';
/*
| Esta ruta indica qué clase controlador debe cargarse si el controlador solicitado 
| no se encuentra. Se anulará el 404 por defecto la página de error. Esto no afectará 
| a la function show_404(), que seguirá cargando el defecto error_404.php archivo en 
| application/errors/error_404.php .
*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */