<?php

class PeliculaVotacionModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function obtenerVotacionPuntuacionPelicula($id){
        $this->db->select('avg(voto) as voto, count(*) as numeroVotos');
        $this->db->from('usuariovotapelicula');
        $this->db->where('pelicula', $id);
        return $this->db->get()->row();
    }

    function obtenerVotacionesPuntuacionesPeliculas(){
        $this->db->select('pelicula, avg(voto) as voto, count(*) as numeroVotos');
        $this->db->from('usuariovotapelicula');
        $this->db->group_by('pelicula');
        return $this->db->get()->result();
    }

    function insertaPeliculaVotacion($data)
    {
        //Inserta Votación
        $this->db->insert('usuariovotapelicula', $data);
    }

    function actualizaPeliculaVotacion($data)
    {
        //Actualiza Votación
        $this->db->replace('usuariovotapelicula', $data);
    }

    function consultarDatosDuplicados($data)
    {
        $this->db->select('*');
        $this->db->from('usuariovotapelicula');
        $this->db->where('usuario', $data['usuario']);
        $this->db->where('pelicula', $data['pelicula']);

        $query = $this->db->get();
        return $result = $query->row();
    }
}