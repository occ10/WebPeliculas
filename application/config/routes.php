<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
 * RUTAS PÚBLICAS
 */
$route['gestion'] = 'gestion/index';
$route['contacto'] = 'contacto/index';
$route['faq'] = 'faq/index';
$route['listadopeliculas'] = 'pelicula/index';
$route['detallepelicula/(:any)'] = 'pelicula/detalle/$1'; //habrá que indicar un parámetro que será la id de la película
$route['cerrarSesion'] = 'login/unset_session_data';//cerrar sesion
$route['crud'] = 'gestion/index';//cerrar sesion
/**
 * RUTAS PRIVADAS
 */
$route['private'] = 'home/indexPrivada';

//Rutas de gestión de películas (grocery_crud)
$route['private/listadopeliculas'] = 'pelicula/indexPrivada';

//Rutas de gestión de participantes (grocery_crud)
$route['private/listadoparticipantes'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/add'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/insert'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/insert_validation'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/success/:num'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/delete/:num'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/read/:num'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/edit/:num'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/update_validation/:num'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/update/:num'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/ajax_list_info'] = 'participante/indexPrivada';
$route['private/listadoparticipantes/ajax_list'] = 'participante/indexPrivada';

//Rutas de gestión de premios (grocery_crud)
$route['private/listadopremios'] = 'premio/indexPrivada';
