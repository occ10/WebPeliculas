<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {

    public function __construct() {
        parent::__construct();


        $this->load->database();// podria hacerlo desde el autoload
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
    }

    /**
     * Listado de películas
     */
    public function index()
    {
        $this->load->view('public/listadoPeliculas');
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
        $this->load->model('PeliculaModel');

        $this->PeliculaModel->buscaPorId($id);
        $this->load->view('public/perfilPelicula');
    }

}