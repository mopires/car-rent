<?php

class StartPageModel extends CI_Model{

    public function GetCarros(){

        return $this->db->get('carros')->result_array();

    }



}