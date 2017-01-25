<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();// podría hacerlo desde el autoload
        $this->load->helper('url');
        $this->load->model('PeliculaModel');
        $this->load->model('PeliculaVotacionModel');
    }

    /**
     * Portada (muestra la cartelera)
     */
    public function index()
    {
        $output['cartelera'] = $this->PeliculaModel->obtenerPeliculasCartelera();
        $output['proximosEstrenos'] = $this->PeliculaModel->obtenerPeliculasProximosEstrenos();
        $output['votaciones'] = $this->PeliculaVotacionModel->obtenerVotacionesPuntuacionesPeliculas();
        $this->load->view('public/home', $output);
    }

    public function indexPrivada(){
        $this->load->view('private/home');
    }
}