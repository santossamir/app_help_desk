<?php
    session_start();

    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

    include "./controller/api_controller.php";
    api_controller::incluir_chamado($titulo, $categoria, $descricao);    
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css">
        <title>App Help Desk</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="retorno_sucesso center-block">
            <div class="alert alert-success center-block text-center" role="alert">
                <h2>Solicitação enviada com sucesso!</h2>
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a> 
            </div>    
        </div>
    </body> 
</html>