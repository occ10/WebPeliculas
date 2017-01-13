<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Portada (muestra la cartelera)
     */
    public function index()
    {
        $this->load->view('public/home');
    }

    public function indexPrivada(){
        $this->load->view('private/home');
    }
}