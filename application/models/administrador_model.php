<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador_model extends CI_model{


    public function __construct()
    {
        parent::__construct();
		if(!$this->session->usuario){

			redirect(base_url().'index.php/login/admin');
		}
		
        $this->load->model("login_model");
    }

        public function listarProducto(){
            return $this->db->get("productos")->result();

        }

        
        public function listarCompra(){
            return $this->db->get("compra")->result();

        }

    public function guardar($datos){
        $datosguardar = array(
    
            "nombre" => $datos["nombre"],
            "descripcion" => $datos["descripcion"],
            "precio" => $datos["precio"],
            "cantidad" => $datos["cantidad"],
            "categoria" => $datos["categoria"]
        );
        return $this->db->insert('productos', $datosguardar);
    }


}