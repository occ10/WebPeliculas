<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premio extends CI_Controller {

    /**
     * Listado de premios de la parte privada
     */
    public function indexPrivada()
    {
        $this->load->view('private/listadoPremios');
    }
}