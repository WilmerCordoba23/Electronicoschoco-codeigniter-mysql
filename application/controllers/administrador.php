<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador extends CI_Controller{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    

public function __construct()
{
	parent::__construct();
	
	$this->load->model("administrador_model");
}


	public function admin (){
		$datos=array(
			"compra"=>$this->administrador_model->listarCompra()
		);
		$this->load->view('admin/index',$datos);
	} 



	public function agregar_productos (){
		$this->load->view('admin/productos/agregar/index');

	}

	public function guardar (){


		if ($this->administrador_model->guardar($_POST)==true) {
			redirect(base_url().'index.php/gestionar_productos/agregar');
		}
	}



	public function productos(){

		$datos=array(
			"productos"=>$this->administrador_model->listarProducto()
		);
		$this->load->view('admin/productos/index',$datos);
	}

	
	public function login(){

		$this->load->view('admin/login/index');
	}

}




