<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->database();// podria hacerlo desde el autoload
        //$this->load->library('grocery_CRUD');
    }
    
	public function index()
	{        
        $data = array(
                      'nombre' => $this->input->post('Username'),
                      'password' => $this->input->post('Password'),
                      'email' => $this->input->post('Email'),

                );
            //Transfering data to Model
	    $this->load->model('Register_model');
        $this->Register_model->user_insert($data);
        $data['message'] = 'Data Inserted Successfully';
            //Loading View
        $this->load->view('public/contacto');
	}
}