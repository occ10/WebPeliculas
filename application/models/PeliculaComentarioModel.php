<?php

class PeliculaComentarioModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function obtenerComentariosPelicula($id){
        $this->db->select('comentario.*, usuario.nombre as nombre');
        $this->db->from('comentario');
        $this->db->join('usuario', 'usuario.id = comentario.usuario');
        $this->db->where('pelicula', $id);
        $resultado = $this->db->get();
        return $resultado->result();
    }
}