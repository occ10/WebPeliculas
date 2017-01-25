<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeliculaVotacion extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();// podria hacerlo desde el autoload
        $this->load->model('PeliculaModel');
        $this->load->model('PeliculaVotacionModel');
        $this->load->helper('url');
    }

    public function asigPeliculaVotacion(){

        $mensaje['data']="";
        $pelicula = $this->input->post('pelicula');
        //Por defecto siempre registramos usuarios de tipo 2 (usuarios normales)
        $data = array(
            'pelicula' => $pelicula,
            'usuario' => $this->session->userdata('user')->id,
            'voto' => $this->input->post('votacion'),
        );
        $this->load->model('PeliculaVotacionModel');


        $Resultado =$this->PeliculaVotacionModel->consultarDatosDuplicados($data);
        if(!isset($Resultado)){
            //Transferimos datos al modelo
            $this->PeliculaVotacionModel->insertaPeliculaVotacion($data);
        }else{
            //Transferimos datos al modelo
            $this->PeliculaVotacionModel->actualizaPeliculaVotacion($data);
        }
        redirect('pelicula/detalle/'.$pelicula);
    }
}