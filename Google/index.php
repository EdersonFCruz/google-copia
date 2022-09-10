<?php
require 'classes/crud.php';
$busca = $_GET['busca'] ?? '';

$conexao = new CRUD();
if (isset($_GET['busca']) && $_GET['busca']) {
    $conexao->busca($busca);
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Google</title>
</head>

<body>

    <div class="container">
        <div class="logo">
            <img src="imagens/google.png" class="img-fluid" alt="Google">
        </div>

        <form action="pesquisa-google.php" method="get" id="divBusca">
            <input type="text" id="txtBusca" name="busca" placeholder="Pesquise no Google ou digite um URL" />
            <img src="imagens/lupa.png" class="lupa" id="btnBusca" alt="Buscar" />
            <img src="imagens/microfone.png" class="microfone" alt="...">
        </form>

    </div>

</body>

</html>