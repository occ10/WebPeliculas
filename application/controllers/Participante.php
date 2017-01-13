<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participante extends CI_Controller {

    /**
     * Listado de participantes de la parte privada
     */
    public function indexPrivada()
    {
        $this->load->view('private/listadoParticipantes');
    }
}