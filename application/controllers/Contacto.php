<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

    /**
     * Contacto (muestra los datos de contacto)
     */
    public function index()
    {
        $this->load->view('public/contacto');
    }
}