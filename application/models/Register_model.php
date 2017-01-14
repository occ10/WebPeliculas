<?php
class Register_model extends CI_Model{
function __construct() {
parent::__construct();
}
function user_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('usuario', $data);
}
}