<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function index()
    {
        $this->load->view('login/index.php');
    }

    public function login($email, $password){

        $this->load->model('LoginValidateModel');
        if($this->LoginValidateModel->validate($email,$password)){
            $this->load->view('client/');
        }else{

        }

    }

}
