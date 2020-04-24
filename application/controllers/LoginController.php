<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function index()
    {
        $this->load->view('login/index.php');
    }

    public function login(){

        $data = $this->input->post();
        $this->load->model('LoginValidateModel');

        if($this->LoginValidateModel->validate($data['email'],$data['password'])){
            $this->load->view('dashboard/index');
        }else{
            $erro = array('erro' => 'Credenciais invalidas');
            $this->load->view('login/index', $erro);
        }

    }

}
