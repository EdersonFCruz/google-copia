<?php

session_start();
include 'conexao.php';

class Login extends Conexao
{

    public function VericaEmail($email)
    {
        $verificausuario = $this->conn->query("SELECT * FROM  usuarios where email = '$email'");

        return $verificausuario->fetch(PDO::FETCH_OBJ);
    }


    public function VericaSenha($senha, $loga)
    {

        if (!empty($senha) &&  password_verify($senha,  $loga->senha)) {

            $_SESSION['usuario'] = $loga;



            if ($_SESSION['usuario']->id == '1') {

                header('location:../controle-adm/admin.php');
            } else {

                header('location:../index.php');
            }
        }
    }
}
