<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeliculaComentario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();// podria hacerlo desde el autoload
        $this->load->model('PeliculaModel');
        $this->load->model('PeliculaComentarioModel');
        $this->load->helper('url');
    }

    public function asigPeliculaComentario(){

        $mensaje['data']="";
        $pelicula = $this->input->post('pelicula');
        //Por defecto siempre registramos usuarios de tipo 2 (usuarios normales)
        $data = array(
            'pelicula' => $pelicula,
            'usuario' => $this->session->userdata('user')->id,
            'texto' => $this->input->post('comentario'),
            'fechahora' => date("Y-m-d H:i:s")
        );
        $this->load->model('PeliculaComentarioModel');
        //Transferimos datos al modelo
        $this->PeliculaComentarioModel->insertaPeliculaComentario($data);

        redirect('pelicula/detalle/'.$pelicula);
    }
}