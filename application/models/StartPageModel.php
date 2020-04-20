<?php

class StartPageModel extends CI_Model{

    public function GetCarros(){

        return $this->db->get('carro')->result_array();

    }



}