<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premio extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();// podria hacerlo desde el autoload
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
    }
    /**
     * Listado de premios de la parte privada
     */
    public function indexPrivada()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('premio');
        $crud->set_subject('Premio');
        $crud->set_theme("datatables");
        $crud->set_crud_url_path(site_url('private/listadopremios'));
        $output = $crud->render();

        $this->load->view('private/listadopremios', $output);

    }
}