<?php
    require('connection.php');

    $conectar = conectar();


    if(isset($_POST['cadastro_equipe']))
    {

        $nome_membro = $_POST["nome_membro"];
        $descricao_equipe = $_POST["descricao_equipe"];
        $inserir_equipe = 'INSERT INTO equipe (id,nome,descricao) values (?,?,?)';

        $conexao_equipe = $conectar->prepare($inserir_equipe);
        $conexao_equipe->execute(array(null ,$nome_membro,$descricao_equipe));
        

    }

    if(isset($_POST['salvar_sobre']))
    {

        $sobre = $_POST["codigo_html"];
        $inserir_sobre = 'INSERT INTO sobre (id,sobre) values (?,?)';

        $conexao_equipe = $conectar->prepare($inserir_sobre);
        $conexao_equipe->execute(array(null,$sobre));
        

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
    
        <nav class="navbar navbar-expand-lg fixed-top   navbar-default cor-padrao">
        <div class="container">
            <a class="navbar-brand" href="#">Denki Code</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-between collapse navbar-collapse" id="navbarNav">
                <ul id="menu-principal" class="navbar-nav">
                    <li class="nav-item">
                    <a ref_sys="sobre" class="nav-link" href="#">Editar Sobre</a>
                    </li>
                    <li class="nav-item">
                    <a ref_sys="cadastrar_equipe" class="nav-link" href="#">Cadastrar Equipe</a>
                    </li>
                    <li class="nav-item">
                    <a ref_sys="lista_equipe" class="nav-link" href="#">Lista Equipe</a>
                    </li>
                </ul>
                <ul class=" nav navbar-nav navbar-right">
                        <li><a href="?sair"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-x" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.646a.5.5 0 0 1 .708.707l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.707l.647-.647-.647-.646a.5.5 0 0 1 .708-.707Z"/>
                        </svg></span>Sair</a></li>
                    </ul>
            </div>
        </div>
        </nav>
        <div style="position: relative;top:50px;" class="box">
        <header id="header" >
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                    <h2><span><i class="bi bi-gear-fill"></i></span>Painel de controle</h2>
                    </div>
                    <div class="col-md-3">
                        <p>Seu ultimo login foi em: 12/06/2023</p>
                    </div>
                </div>
            </div>
        </header>
        <section class="bread">
            <div class="bread-filho container">
                <ol class="breadcrumb">
                    <li class="active">Home</li>
                </ol>   
            </div>
        </section>

        <section class="principal">

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre" ><span><i class="bi bi-pencil"></i></span> Sobre</a>
                        <a href="#" class="list-group-item" ref_sys="cadastrar_equipe"><span><i class="bi bi-pencil"></i></span>Cadastrar equipe </a>
                        <a href="#" class="list-group-item " ref_sys="lista_equipe" >
                            <span class="glyphicon glyphicon-home" ><i class="bi bi-house-door"></i> Lista Equipe</span>
                        </a>
                    </div>


                </div>
                <div class="col-md-9">
                    <div id="sobre_section" class="panel panel-default">
                <div class="panel-heading cor-padrao">
                    <h3 class="panel-title p-3">Sobre</h3>
                </div>
                <div class="panel-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="email">Código HTML:</label>
                        <textarea style="height: 140px;resize:vertical" class="form-control" name="codigo_html"></textarea>
                    </div>


                   <button type="submit" class="btn btn-default mt-2" name="salvar_sobre">Salvar</button>
                    </form> 
                    
                </div><!--panel-body-->

                    </div><!--panel-default-->
                    <div id="cadastrar_equipe_section" class="panel panel-default mt-5">
                    <div class="panel-heading cor-padrao">
                            <h3 class="panel-title p-3">Cadastrar Equipe:</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST">
                                <div class="form-group ">
                                    <label for="email">Nome do membro:</label>
                                    <input type="text" name="nome_membro" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Descricao do membro:</label>
                                    <textarea name="descricao_equipe" id="descricao_equipe" class="form-control" placeholder="Descrição equipe"></textarea>
                                </div>


                                <button type="submit" class="btn btn-default mt-2 " name="cadastro_equipe">Cadastrar</button>
                            </form> 
                                
                        </div>

                    </div><!--panel-default-->

                    <div id="lista_equipe_section" class="panel panel-default mt-5">
                    <div class="panel-heading cor-padrao">
                            <h3 class="panel-title p-3">Membros da equipe:</h3>
                        </div>
                        <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID:</th>
                                    <th>Nome do membro</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM equipe";

                                    $equipe_dados = $conectar->prepare($sql);
                                    $equipe_dados->execute();
                                    $equipe = $equipe_dados->fetchAll();

                                    foreach ($equipe as $key => $value) {  

                                ?>
                                <tr>
                                    <td><?php echo $value['id']?></td>
                                    <td><?= $value['nome'] ?></td>
                                    <td><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Excluir</button></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                       
                                
                        </div>

                    </div><!--panel-default-->
                </div><!--col-md-9-->

                
            </div>
        </div>

        </section>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="./js/main.js"></script>

</body>
</html>




