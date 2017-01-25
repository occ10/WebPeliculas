<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PeliculaParticipanteModel extends CI_Model
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
        $this->db->select('id,nombre, apellidos');
        $this->db->from('participante');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function insertaPeliculaParticipante($data)
    {
        //Inserta Participante en Pelicula en la base de datos
        $this->db->insert('peliculaparticipante', $data);
    }

    function consultarDatosDuplicados($data)
    {
        $this->db->select('*');
        $this->db->from('peliculaparticipante');
        $this->db->where('pelicula', $data['pelicula']);
        $this->db->where('participante', $data['participante']);

        $query = $this->db->get();
        return $result = $query->row();
    }

    function obtenerParticipantesPelicula($id){
        $this->db->select('peliculaparticipante.*, participante.nombre as nombre, participante.apellidos as apellidos, tipoparticipante.nombre as tipoParticipante');
        $this->db->from('peliculaparticipante');
        $this->db->join('participante', 'participante.id = peliculaparticipante.participante');
        $this->db->join('participantetipoparticipante', 'participantetipoparticipante.participante = peliculaparticipante.participante');
        $this->db->join('tipoparticipante', 'tipoparticipante.id = participantetipoparticipante.tipo');
        $this->db->where('pelicula', $id);
        $resultado = $this->db->get();
        return $resultado->result();
    }
}