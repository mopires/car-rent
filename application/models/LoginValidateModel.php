<?php


class LoginValidateModel extends CI_Model{


    public function validate($email, $password){

        $sql = "select id_usuario, cpf, primeiro_nome, cnh, email  from usuario where email = " .
                                    $this->db->escape($email) .
                                    " and password = " .$this->db->escape($password);

        $resultado = $this->db->query($sql);
        $user = $resultado->row();
        $this->load->library('session');
        $this->session->set_userdata('nome',$user->primeiro_nome);

        return $resultado->num_rows() == 1;

    }

}