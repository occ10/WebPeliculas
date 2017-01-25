<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {

    public function __construct() {
        parent::__construct();


        $this->load->database();// podria hacerlo desde el autoload
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
        $this->load->model('PeliculaModel');
        $this->load->model('PeliculaVotacionModel');
    }

    /**
     * Listado de películas - parte pública
     */
    public function index()
    {

        $output['listado'] = $this->PeliculaModel->obtenerTodos();
        $output['votaciones'] = $this->PeliculaVotacionModel->obtenerVotacionesPuntuacionesPeliculas();

        $this->load->view('public/listadopeliculas', $output);
    }


    /**
     * Listado de películas de la parte privada
     */
    public function indexPrivada()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('pelicula');
        $crud->set_subject('Pelicula');
        $crud->set_theme("datatables");
        $crud->set_crud_url_path(site_url('private/listadopeliculas'));
        $output = $crud->render();
        $this->load->view('private/listadopeliculas', $output);
    }

    /**
     * Una sola película, vista de detalle (debe recibir parámetro)
     */
    public function detalle($id)
    {
        //Cargamos en un array todo lo necesario para la vista de detalle
        $output = $this->PeliculaModel->cargarDatosVistaDetalle($id);
        if($this->session->userdata('user') != ""){
            $data = array(
                'pelicula' => $id,
                'usuario' => $this->session->userdata('user')->id,
            );
            $votacion = $this->PeliculaVotacionModel->consultarDatosDuplicados($data);
            if(isset($votacion)){
                $output['usuarioVotacion'] = $votacion;
            }
        }
        $this->load->view('public/perfilPelicula', $output);
    }

}