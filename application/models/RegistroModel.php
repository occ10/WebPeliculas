<?php

class RegistroModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertaUsuario($data)
    {
        //Inserta usuario en la base de datos
        $this->db->insert('usuario', $data);
    }
}