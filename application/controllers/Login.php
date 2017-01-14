<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
                      

                );
		$this->load->model('Login_model');
		  $output['result'] = $this->Login_model->get_contents($data);
		if(count($output['result']) >  0){
			$this->load->view('public/index',$output);
			//$this->load->view('public/contacto');
		}else{
 
		    $this->load->view('public/contacto');		
		}
        //$this->load->view('public/index', $output);

	}
}