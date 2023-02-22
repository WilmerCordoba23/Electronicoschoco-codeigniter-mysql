<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_model{

     public function verificarsesion($usuario){

        $this->db->select("*");
        $this->db->from('usuario');
         $this->db->where('usuario', $usuario);
         $resultado = $this->db->get();
        return $resultado->first_row();
}
}