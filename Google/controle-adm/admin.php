<?php

include '../classes/crud.php';

$conexao = new CRUD;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/index.css" rel="stylesheet">

</head>

<body class="style-adm">
    <div class="container">
        <h1 class="adm-titulo">Página Administrativa</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div id="container">

                    <?php
                    $exibe_noticias = $conexao->noticias();

                    foreach ($exibe_noticias as $info) {
                        echo
                        '
                        <form method="GET">
                        <div class = "row ">

                            <div id="artigo-admin">
                                <div class="col-8">
                                    <p>' . $info->titulo . '</p>
                                </div>
                                
                                <div class="col-2">
                                    <p>
                                        <a class="botao" type="submit" href="editar-artigo.php?id=' . $info->id . '">Editar</a>
                                    </p>        
                                </div>
                                <div class="col-2">
                                    <p>
                                        <a class="botao" type="submit" href="excluir-artigo.php?id=' . $info->id . '">Excluir</a>
                                    </p>
                                </div>      
                            </div>
                        </div>
                        </form> ';
                    }
                    ?>
                    <a class="botao botao-block" href="adicionar.php">Adicionar Artigo</a>
                </div>
            </div>
        </div>
    </div>
</body>


</html>