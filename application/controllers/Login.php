<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->database();// podria hacerlo desde el autoload
        //$this->load->library('grocery_CRUD');
    }
    
	public function index()
	{        
        $data = array(
              'nombre' => $this->input->post('nombre'),
              'password' => $this->input->post('password')
        );

		$this->load->model('LoginModel');
        $output['result'] = $this->LoginModel->get_contents($data);

        //HAY QUE COMPROBAR QUË TIPO ES

        //SI ES TIPO == 1 -> ES USUARIO ADMIN Y DEBE SER REDIRIGIDO A LA VISTA PRIVATE
        //SI ES TIPO == 2
        //Si se crea la sesión, debe aparecer un mensaje en la vista cabecera
		if(count($output['result']) >  0){
			//$this->load->view('public/index',$output);
            redirect('/');
		}else{
            redirect('/');
		}
	}
}