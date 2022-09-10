<?php
include '../classes/cadastro.php';

$email = $_GET['email'] ?? '';
$senha = $_GET['senha'] ?? '';
$nome = $_GET['nome'] ?? '';
$senha = password_hash("$senha", PASSWORD_DEFAULT);
$endereco = $_GET['endereco'] ?? '';
$cadastro = new Cadastro();

if ($_GET) {

    $cadastro->ExecutaCadastro($email, $senha, $nome, $endereco);

    echo
    '<script> alert("Registrado com Sucesso!");
     window.location.href = "login-form.php  "  </script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="text-center p-2">
        <h1>CADASTRO</h1>
    </div>
    <div class="container">
        <form class="row g-3" method="GET">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input name="senha" type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label class="form-label">Nome completo</label>
                <input name="nome" type="text" class="form-control">
            </div>
            <div class="col-10">
                <label for="inputAddress2" class="form-label">Endereço</label>
                <input name="endereco" type="text" class="form-control" id="inputAddress2" placeholder="ex. R Projetada, Av Projetada...">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Numero</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Estado</label>
                <select id="inputState" class="form-select">
                    <option selected>Escolha seu estado</option>
                    <option>São Paulo</option>
                    <option>Minas Gerais</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
</body>

</html>