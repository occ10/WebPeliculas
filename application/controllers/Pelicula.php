<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {

    public function __construct() {
        parent::__construct();


        $this->load->database();// podria hacerlo desde el autoload
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
        $this->load->model('PeliculaModel');
        $this->load->model('PeliculaGeneroModel');
        $this->load->model('PeliculaVotacionModel');
        $this->load->model('PeliculaParticipanteModel');
        $this->load->model('PeliculaPremioModel');
        $this->load->model('PeliculaComentarioModel');
    }

    /**
     * Listado de películas - parte pública
     */
    public function index()
    {

        $output['listado'] = $this->PeliculaModel->obtenerTodos();
        $output['votaciones'] = $this->PeliculaVotacionModel->obtenerVotacionesPuntuacionesPeliculas();

        print_r($output['votaciones']);
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
        $pelicula = $this->PeliculaModel->buscaPorId($id);
        $votaciones = $this->PeliculaVotacionModel->obtenerVotacionPuntuacionPelicula($id); //dado un id de película, obtener Número de votos y Puntuación media
        $generos = $this->PeliculaGeneroModel->obtenerGenerosPelicula($id); //dado un id de película, obtener todos sus géneros
        $participantes = $this->PeliculaParticipanteModel->obtenerParticipantesPelicula($id);
        $premios = $this->PeliculaPremioModel->obtenerPremiosPelicula($id);
        $comentarios = $this->PeliculaComentarioModel->obtenerComentariosPelicula($id);

        $output['pelicula'] = $pelicula;
        $output['votaciones'] = $votaciones;
        $output['generos'] = $generos;
        $output['participantes'] = $participantes;
        $output['premios'] = $premios;
        $output['comentarios'] = $comentarios;

        $this->load->view('public/perfilPelicula', $output);
    }

}