<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->database();// podria hacerlo desde el autoload
        $this->load->library('grocery_CRUD');
    }
    
	public function index()
	{        
        $crud = new grocery_CRUD();
        $crud->set_table('usuario');
        $crud->set_subject('Usuarios');
        $crud->set_theme("datatables");
        
        $output = $crud->render();
		//$this->load->model('Login_model');
		  //$output['result'] = $this->Login_model->get_contents();
		
        //$this->load->view('public/index', $output);
		$data['data'] = "Ejemplo";
		$this->load->view('public/index',$output);
	}
}




