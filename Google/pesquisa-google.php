<?php
require 'classes/crud.php';

$conexao = new CRUD();
$busca = $_GET['busca'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <title>Pesquisa Google</title>
</head>

<body>


    <div class="container-fluid  topo">
        <div class="row d-flex">
            <div class="col-10 col-md-2 text-center">
                <a href="index.php">
                    <img src="imagens/google.png" id="img-pesquisa" class="img-fluid" alt="Google">
                </a>
            </div>
            <div class="col-12 col-md-8 order-3 order-md-2 divBusca">
                <form action="pesquisa-google.php" method="get">
                    <input type="text" id="txtBusca" name="busca" placeholder="Pesquise no Google ou digite uma URL" />
                    <img src="imagens/lupa.png" class="lupa" id="btnBusca" alt="Buscar" />
                    <img src="imagens/microfone.png" class="microfone" alt="...">
                </form>
            </div>
            <div class="col-2 order-2 order-md-3 d-flex justify-content-end align-items-center flex-nowrap ">
                <a class="order-2 order-md-1" href="#"> <img src="imagens/config.png" alt="..."> </a>
                <a class="order-1 order-md-2" href="login-cadastro/login-form.php"><img src="imagens/usuario.png" alt="..."> </a>
            </div>
        </div>
    </div>
    <div class="container lista-menu">
        <div class="row ">
            <div class="col-xl-6 offset-md-1">
                <ul>
                    <li>
                        <a href="#" class="listinha">Todas</a>
                    </li>
                    <li>
                        <a href="# " class="listinha">Notícias</a>
                    </li>
                    <li>
                        <a href="# " class="listinha">Imagens</a>
                    </li>
                    <li>
                        <a href="# " class="listinha">Vídeos</a>
                    </li>
                    <li>
                        <a href="# " class="listinha">Maps</a>
                    </li>
                    <li>
                        <a href="# " class="listinha">Mais</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="container-fluid" style="margin: 0 0 20px 0; color: #70757a">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-md-1">
                <?php
                $noticias = $conexao->busca($busca);
                foreach ($noticias as $resultado) {

                    echo
                    '<div>
                    <a class= "style-portal "href="https://www.cnnbrasil.com.br"> ' . $resultado['portal'] . ' </a>                
                     <h2 > <a class= "style-titulo" href="# " > ' . $resultado['titulo'] . '</a> </h2>
                    <p class=" style-noticia " > ' . $resultado['noticia'] . '</p>
            </div>';
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>