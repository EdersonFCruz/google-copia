<?php

include  'conexao.php';

class Cadastro extends Conexao
{

    public function ExecutaCadastro($email, $senha, $nome, $endereco)
    {
        $realizacadastro = $this->conn->query("INSERT into usuarios (email, senha, nome, endereco) values ('$email', '$senha', '$nome', '$endereco') ");

        return $realizacadastro;
    }
}
