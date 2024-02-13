<?php

require('connection.php');
$conectar = conectar();
if (isset($_POST['cadastrar_login'])) {
    $nome = $_POST['nome_register'];
    $email = $_POST['login_register'];
    $senha = $_POST['senha_register'];
    $query= "INSERT INTO usuario (id,nome,email,ultimo_login,senha) VALUES (?,?,?,?,?)";
    $preparandoquery = $conectar->prepare($query);
    $preparandoquery->execute(array(null,$nome,$email,null,$senha));

}




?>

<!DOCTYPE html>
<html lang="br-port">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silvana Sousa</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    
        <div class="card p-5" style="width: 400px;">
        <h2 class="text-center mb-3" >Cadastrar Usuário</h2>
            <form method="POST" >
            <div class="form-floating mb-3">
                <input name="nome_register" type="text" class="form-control" id="floatingName" placeholder="Nome">
                <label for="floatingName">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input name="login_register" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating">
                <input name="senha_register" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>

            <button type="submit" class="btn btn-default mt-2 " name="cadastrar_login">Cadastrar</button>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>