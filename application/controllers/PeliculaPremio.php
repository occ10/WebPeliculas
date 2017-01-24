<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeliculaPremio extends CI_Controller {

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
        $crud->set_table('peliculapremio');
        $crud->set_subject('PeliculaPremio');
        $crud->set_theme("datatables");
        $crud->set_crud_url_path(site_url('private/listadopeliculapremio'));
        $output = $crud->render();

        $this->load->view('private/listadopeliculapremio',$output);
    }

    public function formPeliculaPremio(){

        $this->load->model('PeliculaPremioModel');
        $Resultado1['result1'] = $this->PeliculaPremioModel->get_contents1();
        $Resultado1['result2'] = $this->PeliculaPremioModel->get_contents2();
        $this->load->view('private/formPeliculaPremio',$Resultado1);

    }

    public function asigPeliculaPremio(){

        $mensaje['data']="";
        //echo '<pre>' . $mensaje . '</pre>';
        $data = array(
            'pelicula' => $this->input->post('pelicula'),
            'premio' => $this->input->post('premio'),

        );
        $this->load->model('PeliculaPremioModel');
        $Resultado =$this->PeliculaPremioModel->consultarDatosDuplicados($data);

        if(!isset($Resultado)){
            //Transferimos datos al modelo
            $this->PeliculaPremioModel->insertaPeliculaPremio($data);
            $mensaje['msg']="Datos insertados correctamente";
        }else{

            $mensaje['msg']="El participante ya participa en la pilicula";
        }
        $Resultado1['result1'] = $this->PeliculaPremioModel->get_contents1();
        $Resultado1['result2'] = $this->PeliculaPremioModel->get_contents2();

        $this->load->view('private/formPeliculaPremio',$Resultado1,$mensaje);
        //redirect('private/formPeliculaParticipante');


    }
}