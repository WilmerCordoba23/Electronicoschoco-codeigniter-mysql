<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_model{



    public function listar(){
    $this->db->get("productos")->result();
    //var_dump($this->db->get("productos")->result());
       // echo "hola";
    }



    public function guardar($datos){
         $datosguardar = array(
            "nombres" => $datos["nombres"],
             "apellidos" => $datos["apellidos"],
             "telefono" => $datos["telefono"],
             "identificacion" => $datos["identificacion"],
              "correo" => $datos["correo"],
             "ciudad" => $datos["ciudad"],
              "direccion" => $datos["direccion"]
            );
        return $this->db->insert('compra', $datosguardar);
        
                
        }

}