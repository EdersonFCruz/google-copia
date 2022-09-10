
<?php

include 'conexao.php';

class CRUD extends Conexao
{
    public function busca($busca)
    {
        $busca = $this->conn->query("SELECT * FROM noticias where titulo like '%$busca%' or noticia like '%$busca%' or portal like '%$busca%' or categoria like '%$busca%' ");
        return $busca->fetchAll();
    }


    public function noticias()
    {
        $resultado = $this->conn->query("SELECT * FROM noticias");
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }
    public function dados($id)
    {
        $resultado = $this->conn->query("SELECT * FROM noticias where id = '$id'");
        return $resultado->fetch();
    }

    public function adicionar($titulo, $categoria, $portal, $noticia)
    {

        if (empty($titulo) || empty($categoria) || empty($portal) || empty($noticia)) {
            echo '  <script> alert("há campo vazio")</script>';
            return;
        }

        $adicionar = $this->conn->query("INSERT INTO noticias(titulo, categoria, portal, noticia) values ('$titulo', '$categoria', '$portal', '$noticia')");

        if ($adicionar) {
            echo
            '<script> alert("Registrado com Sucesso!");
             window.location.href = "admin.php"  </script>';
        }
    }

    public function ExcluirNoticia($id)
    {
        $removerartigo = $this->conn->query("DELETE FROM noticias WHERE id = '$id' ");
    }

    public function editar($titulo, $noticia, $portal, $id)
    {
        $editar = $this->conn->prepare("UPDATE noticias SET titulo = ?,noticia = ?, portal = ? where id=?");
        $editar->execute([$titulo, $noticia, $portal, $id]);
    }
}

?>