<?php


class LoginValidateModel extends CI_Model{


    public function validate($email, $password){

        $sql = "select id_usuario, cpf, primeiro_nome, cnh, email  from usuario where email = " .
                                    $this->db->escape($email) .
                                    " and password = " .$this->db->escape($password);

        $resultado = $this->db->query($sql);
        return $resultado->num_rows() == 1;

    }

}