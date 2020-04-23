<?php


class LoginValidateModel extends CI_Model{


    public function validate($email, $password){

        $query = $this->db->query("select 1 from usuario where email = " . $email . " and password = " .$password);

        return $query->result() ? true : false ;

    }

}