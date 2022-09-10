<?php
require '../classes/crud.php';

$titulo = $_POST['titulo'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$portal = $_POST['portal'] ?? '';
$noticia = $_POST['noticia'] ?? '';
$botao = $_POST['botao'] ?? '';
$conexao = new CRUD;
if ($_POST) {
    $conexao->adicionar($titulo, $categoria, $portal, $noticia, $botao);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>controle</title>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Titulo</label>
                <input name="titulo" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Portal</label>
                <input name="portal" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Categoria</label>
                <input name="categoria" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Notícia</label>
                <textarea name="noticia" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" name="botao" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>