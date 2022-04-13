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
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method = "post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'Erro'){
                ?>

                <div class="text-danger">
                    <strong>Usuário ou senha inválido(s).</strong>
                </div>               

                <?php } ?>

                <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'Erro2'){
                ?>
                <div class="text-danger">
                    <strong>Faça login antes de acessar as páginas protegidas.</strong>
                </div>               

                <?php } ?>

                  <br>  

                <button class="btn btn-lg btn-info btn-block" type="submit">
                  Entrar
                </button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>