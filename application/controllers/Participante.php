<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participante extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();// podria hacerlo desde el autoload
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
    }

    /**
     * Listado de participantes de la parte privada
     */
    public function indexPrivada()
    {
        //$this->load->view('private/listadoParticipantes');

        $crud = new grocery_CRUD();
        $crud->set_table('participante');
        $crud->set_subject('Participante');
        $crud->set_theme("datatables");
        $crud->set_crud_url_path(site_url('private/listadoparticipantes'));
        $output = $crud->render();
        echo "<pre>";
        //print_r($output);
        echo "</pre>";
        $this->load->view('private/listadoParticipantes',$output);
    }
}