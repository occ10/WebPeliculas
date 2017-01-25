<?php

class PeliculaModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PeliculaModel');
        $this->load->model('PeliculaGeneroModel');
        $this->load->model('PeliculaVotacionModel');
        $this->load->model('PeliculaParticipanteModel');
        $this->load->model('PeliculaPremioModel');
        $this->load->model('PeliculaComentarioModel');
    }

    function buscaPorId($id)
    {
        $this->db->select('*');
        $this->db->from('pelicula');
        $this->db->where('id', $id);
        $resultado = $this->db->get()->row();

        return $resultado;
    }

    function obtenerTodos(){
        $query = $this->db->get('pelicula');
        return $query->result();
    }

    function obtenerPeliculasCartelera(){
        $this->db->select('*');
        $this->db->from('pelicula');
        $this->db->where('cartelera', 1);
        $resultado = $this->db->get();
        return $resultado->result();
    }

    function obtenerPeliculasProximosEstrenos(){
        $this->db->select('*');
        $this->db->from('pelicula');
        $this->db->where('fechaPublicacion >', date('Y-m-d'));
        $resultado = $this->db->get();
        return $resultado->result();
    }

    function cargarDatosVistaDetalle($id){
        $pelicula = $this->PeliculaModel->buscaPorId($id);
        $votaciones = $this->PeliculaVotacionModel->obtenerVotacionPuntuacionPelicula($id); //dado un id de película, obtener Número de votos y Puntuación media
        $generos = $this->PeliculaGeneroModel->obtenerGenerosPelicula($id); //dado un id de película, obtener todos sus géneros
        $participantes = $this->PeliculaParticipanteModel->obtenerParticipantesPelicula($id);
        $premios = $this->PeliculaPremioModel->obtenerPremiosPelicula($id);
        $comentarios = $this->PeliculaComentarioModel->obtenerComentariosPelicula($id);

        $output['pelicula'] = $pelicula;
        $output['votaciones'] = $votaciones;
        $output['generos'] = $generos;
        $output['participantes'] = $participantes;
        $output['premios'] = $premios;
        $output['comentarios'] = $comentarios;

        return $output;
    }
}