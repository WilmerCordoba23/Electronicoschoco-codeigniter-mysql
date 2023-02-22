<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller{


	public function user (){
		$this->load->view('user/index');
	} 

    public function verificar_compra (){
        $this->load->model('usuario_model');
    
        if ($this->usuario_model->guardar($_POST)==true) {
            redirect(base_url().'index.php/user');
        }
    }
    
    public function verificar (){
        $this->load->view('user/verificar/index');
        
    }
    
    public function categoria (){
         $this->load->view('user/categoria/index');
        
     }








}