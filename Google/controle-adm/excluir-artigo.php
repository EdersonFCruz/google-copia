<?php

include "../classes/crud.php";

$conexao = new CRUD;

if ($_POST) {
    $conexao->ExcluirNoticia($_POST['id']);
    echo '<script> confirm("Excluido com sucesso!"); window.location.href = "admin.php" </script>';
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Excluir Artigo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/index.css" rel="stylesheet">
</head>

<body class="style-adm">
    <div class="contaniner">
        <div class="col-md-8 offset-md-2">
            <div id="container">
                <h1>Você realmente deseja excluir o artigo?</h1>
                <form method="post" action="excluir-artigo.php">
                    <p>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        <button type="submit" class="botao">Excluir</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>