<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginModel extends CI_Model
{
    function get_contents($data)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nombre', $data['nombre']);
        $this->db->where('password', $data['password']);

        $query = $this->db->get();
        return $result = $query->row();
    }
}