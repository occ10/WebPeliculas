<?php

class PeliculaComentarioModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertaPeliculaComentario($data)
    {
        //Inserta Participante en Pelicula en la base de datos
        $this->db->insert('comentario', $data);
    }

    function obtenerComentariosPelicula($id){
        $this->db->select('comentario.*, usuario.nombre as nombre');
        $this->db->from('comentario');
        $this->db->join('usuario', 'usuario.id = comentario.usuario');
        $this->db->where('pelicula', $id);
        $this->db->order_by("fechahora", "desc");
        $resultado = $this->db->get();
        return $resultado->result();
    }


}