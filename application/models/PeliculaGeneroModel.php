<?php

class PeliculaGeneroModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function obtenerGenerosPelicula($id){
        $this->db->select('tipogeneropelicula.*, tipogenero.nombre as nombre');
        $this->db->from('tipogeneropelicula');
        $this->db->join('tipogenero', 'tipogenero.id = tipogeneropelicula.genero');
        $this->db->where('pelicula', $id);
        $resultado = $this->db->get();
        return $resultado->result();
    }
}