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
        $resultado = $this->db->get();
        $pelicula = $resultado->result();

        return $pelicula;
    }
}