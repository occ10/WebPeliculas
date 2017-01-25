<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PeliculaPremioModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_contents1()
    {
        $this->db->select('id,titulo');
        $this->db->from('pelicula');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function get_contents2()
    {
        $this->db->select('id,nombre');
        $this->db->from('premio');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function insertaPeliculaPremio($data)
    {
        //Inserta Participante en Pelicula en la base de datos
        $this->db->insert('peliculapremio', $data);
    }

    function consultarDatosDuplicados($data)
    {
        $this->db->select('*');
        $this->db->from('peliculapremio');
        $this->db->where('pelicula', $data['pelicula']);
        $this->db->where('premio', $data['premio']);

        $query = $this->db->get();
        return $result = $query->row();
    }

    function obtenerPremiosPelicula($id){
        $this->db->select('peliculapremio.*, premio.nombre as nombre');
        $this->db->from('peliculapremio');
        $this->db->join('premio', 'premio.id = peliculapremio.premio');
        $this->db->where('pelicula', $id);
        $resultado = $this->db->get();
        return $resultado->result();

    }
}