<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->database();// podria hacerlo desde el autoload
        //$this->load->library('grocery_CRUD');
    }
    
	public function index()
	{
	    //Por defecto siempre registramos usuarios de tipo 2 (usuarios normales)
        $data = array(
              'nombre' => $this->input->post('nombre'),
              'password' => $this->input->post('password'),
              'email' => $this->input->post('email'),
              'tipo' => 2,
        );

        //Transferimos datos al modelo
	    $this->load->model('RegistroModel');

        $this->RegistroModel->insertaUsuario($data);

        $data['message'] = 'Registrado correctamente.';

        //Cargamos vistas
        //$this->load->view('public/home');
        redirect('/');
    }
}