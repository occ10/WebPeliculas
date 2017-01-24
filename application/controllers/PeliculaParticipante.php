<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeliculaParticipante extends CI_Controller {

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
        $crud->set_table('peliculaparticipante');
        $crud->set_subject('PeliculaParticipante');
        $crud->set_theme("datatables");
        $crud->set_crud_url_path(site_url('private/listadopeliculaparticipante'));
        $output = $crud->render();

        $this->load->view('private/listadoPeliculaParticipantes',$output);
    }

    public function formPeliculaParticipante(){

      		$this->load->model('PeliculaParticipanteModel');
            $Resultado1['result1'] = $this->PeliculaParticipanteModel->get_contents1();
            $Resultado1['result2'] = $this->PeliculaParticipanteModel->get_contents2();
            $this->load->view('private/formPeliculaParticipantes',$Resultado1);

    }

    public function asigPeliculaParticipante(){

        $mensaje['data']="";
        //Por defecto siempre registramos usuarios de tipo 2 (usuarios normales)
        $data = array(
            'pelicula' => $this->input->post('pelicula'),
            'participante' => $this->input->post('participante'),

        );
        $this->load->model('PeliculaParticipanteModel');
        $Resultado =$this->PeliculaParticipanteModel->consultarDatosDuplicados($data);
        if(!isset($Resultado)){
            //Transferimos datos al modelo
            $this->PeliculaParticipanteModel->insertaPeliculaParticipante($data);
            $mensaje['msg']="Datos insertados correctamente";
        }else{

            $mensaje['msg']="El participante ya participa en la pilicula";
        }
        $Resultado1['result1'] = $this->PeliculaParticipanteModel->get_contents1();
        $Resultado1['result2'] = $this->PeliculaParticipanteModel->get_contents2();

        $this->load->view('private/formPeliculaParticipantes',$Resultado1,$mensaje);
        //redirect('private/formPeliculaParticipante');


    }
}