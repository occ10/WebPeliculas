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
}