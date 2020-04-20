<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StartPageController extends CI_Controller {

    public function index()
    {
        $this->load->model("StartPageModel");
        $lista = $this->StartPageModel->getCarros();
        $dados = array('carros' => $lista);
        $this->load->view('start_page', $dados);
    }

    public function search($query){

    }

}
