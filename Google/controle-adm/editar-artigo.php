<?php

include '../classes/crud.php';

$id = $_GET['id'] ?? '';
$titulo = $_POST['titulo'] ?? '';
$noticia = $_POST['noticia'] ?? '';
$portal = $_POST['portal'] ?? '';
$conexao = new CRUD;
$dados = $conexao->dados($id);

if ($_POST) {
    $editar = $conexao->editar($titulo, $noticia, $portal, $id);
    echo '<script> alert("EDITADO COM SUCESSO!"); window.location.href = "admin.php" </script>';
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Editar Artigo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/index.css" rel="stylesheet">
</head>

<body class="style-adm">
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h1 class="adm-titulo">Editar Artigo</h1>
            <div id="container">
                <form action="" method="post">
                    <p>
                    <form action="editar-artigo.html" method="post">
                        <p>
                            <label for="titulo">Digite o novo título do artigo</label>
                            <input class="campo-form" type="text" name="titulo" id="titulo" value=" <?php echo $dados['titulo'] ?>  " />
                        </p>
                        <p>
                            <label for="noticia">Digite o novo conteúdo do artigo</label>
                            <textarea class="campo-form" type="text" name="noticia" id="titulo">  <?php echo $dados['noticia'] ?> </textarea>
                        </p>
                        <p>
                            <label for="noticia">Portal</label>
                            <textarea class="campo-form" type="text" name="portal" id="titulo"><?php echo $dados['portal'] ?> </textarea>
                        </p>
                        <input type="hidden" name="id" value=" <?php echo $_GET['id']; ?> " />
                        <button class="botao" type="submit">Editar Artigo</button>
                        </p>
            </div>
            </form>
        </div>
    </div>
</body>

</html>