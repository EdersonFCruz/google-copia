<?php
include '../classes/login.php';

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$login = new Login();


if ($_POST) {

    if (!empty($email) == $login->VericaEmail($email)) {

        $loga = $login->VericaEmail($email);

        if ($login->VericaSenha($senha, $loga)) {
        } else {

            echo "<script> alert('Email ou Senha incorreto1') </script>";
        }
    } else {
        echo "<script> alert('Email ou Senha incorreto2') </script>";
    }
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
    <title>Login</title>
</head>

<body>
    <div class="text-center">
        <h1>LOGIN</h1>
    </div>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="senha" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div>
                <a class="listinha" href="cadastro-form.php">Crie uma conta agora!</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>