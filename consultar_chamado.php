<?php
  require_once "validador_acesso.php";
  include "./controller/api_controller.php";
?>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="css/style.css">
      <title>App Help Desk</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>

   <body>
      <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#">
            <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
               App Help Desk
         </a>
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="logoff.php">SAIR</a>
            </li>
         </ul>
      </nav>

      <div class="container">    
         <div class="row">
            <div class="card-consultar-chamado">
               <div class="card">
                  <div class="card-header">
                     Consulta de chamado
                  </div>
                  <div class="card-body">
                     <?php
                        $dados = api_controller::mostrar_chamados();
                        foreach($dados as $dado){
                     ?>
                     <div class="card mb-3 bg-light">
                        <div class="card-body">
                           <h5 class="card-title"><?php echo $dado->titulo; ?></h5>
                           <h6 class="card-subtitle mb-2 text-muted"><?php echo $dado->categoria;?></h6>
                           <p class="card-text"><?php echo $dado->descricao;?></p>
                        </div>
                     </div>
                     <?php } 
                     ?>         
                     <div class="row mt-5">
                        <div class="col-6">
                           <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>