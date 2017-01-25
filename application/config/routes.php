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
$route['detallepelicula/(:num)'] = 'pelicula/detalle/$1'; //habrá que indicar un parámetro que será la id de la película
$route['cerrarSesion'] = 'login/unset_session_data';//cerrar sesion
$route['crud'] = 'gestion/index';//cerrar sesion
$route['registro'] = 'registro/index';//cerrar sesion
$route['login'] = 'login/index';//cerrar sesion
$route['comentario'] = 'peliculacomentario/asigPeliculaComentario';//asignar comentario a una película
$route['votacion'] = 'peliculavotacion/asigPeliculaVotacion';//asignar votación a una película



/**
 * RUTAS PRIVADAS
 */
$route['private'] = 'home/indexPrivada';

//Rutas de gestión de películas (grocery_crud)
$route['private/listadopeliculas'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/add'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/insert'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/insert_validation'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/success/:num'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/delete/:num'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/read/:num'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/edit/:num'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/update_validation/:num'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/update/:num'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/ajax_list_info'] = 'pelicula/indexPrivada';
$route['private/listadopeliculas/ajax_list'] = 'pelicula/indexPrivada';


//Rutas de gestión de premios (grocery_crud)
$route['private/listadopremios'] = 'premio/indexPrivada';
$route['private/listadopremios/add'] = 'premio/indexPrivada';
$route['private/listadopremios/insert'] = 'premio/indexPrivada';
$route['private/listadopremios/insert_validation'] = 'premio/indexPrivada';
$route['private/listadopremios/success/:num'] = 'premio/indexPrivada';
$route['private/listadopremios/delete/:num'] = 'premio/indexPrivada';
$route['private/listadopremios/read/:num'] = 'premio/indexPrivada';
$route['private/listadopremios/edit/:num'] = 'premio/indexPrivada';
$route['private/listadopremios/update_validation/:num'] = 'premio/indexPrivada';
$route['private/listadopremios/update/:num'] = 'premio/indexPrivada';
$route['private/listadopremios/ajax_list_info'] = 'premio/indexPrivada';
$route['private/listadopremios/ajax_list'] = 'premio/indexPrivada';


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

//Rutas de gestión de peliculaParticipantes (grocery_crud)
$route['private/listadopeliculaparticipante'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/add'] = 'peliculaparticipante/indexPrivada';

$route['private/listadopeliculaparticipante/insert'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/insert_validation'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/success/:num'] = 'peliculaparticipante/indexPrivada';

$route['private/listadopeliculaparticipante/delete/:num'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/read/:num'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/edit/:num'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/update_validation/:num'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/update/:num'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/ajax_list_info'] = 'peliculaparticipante/indexPrivada';
$route['private/listadopeliculaparticipante/ajax_list'] = 'peliculaparticipante/indexPrivada';



////////
$route['private/formPeliculaParticipante'] = 'peliculaparticipante/formPeliculaParticipante';
$route['private/asigPeliculaParticipante'] = 'peliculaparticipante/asigPeliculaParticipante';


//Rutas de gestión de peliculaPremio (grocery_crud)
$route['private/listadopeliculapremio'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/add'] = 'peliculapremio/indexPrivada';

$route['private/listadopeliculapremio/insert'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/insert_validation'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/success/:num'] = 'peliculapremio/indexPrivada';

$route['private/listadopeliculapremio/delete/:num'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/read/:num'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/edit/:num'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/update_validation/:num'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/update/:num'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/ajax_list_info'] = 'peliculapremio/indexPrivada';
$route['private/listadopeliculapremio/ajax_list'] = 'peliculapremio/indexPrivada';


////////
$route['private/formPeliculaPremio'] = 'peliculapremio/formPeliculaPremio';
$route['private/asigPeliculaPremio'] = 'peliculapremio/asigPeliculaPremio';