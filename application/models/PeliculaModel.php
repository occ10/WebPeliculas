<?php

class PeliculaModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
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
}