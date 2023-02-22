<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{

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

        $this->load->model("login_model");
    }



    public function login(){

		$this->load->model("login_model");
		$this->load->view('admin/login/index');
		$this->session->set_userdata('error',false);
		
	}

	
	public function sesion(){

		$resultado = $this->login_model->verificarsesion($_POST['usuario']);

		if ($resultado->contraseña == $this->input->post('contraseña')){
			$this->session->set_userdata('usuario',$resultado);
			redirect(base_url().'index.php/admin');
		}else{
			$this->session->set_userdata('error',true);
			redirect(base_url().'index.php/login/admin');
		}
	}

	public function cerrar(){
		$this->session->unset_userdata('usuario');
		redirect(base_url().'index.php/login/admin');
	}


}