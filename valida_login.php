<?php
session_start();

$usuario_autenticado = false;
$usuario_id = null;

$usuarios_app = [
                    ['id' => 1, 'email' => 'rita@teste.com', 'senha' => '1234']
                ];

foreach($usuarios_app as $user){
    
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
    }
};

if($usuario_autenticado){
   echo "Usuário autenticado."; 
   $_SESSION['autenticado'] = 'Sim';
   $_SESSION['id'] = $usuario_id;
   header('Location: home.php');
} else{
    $_SESSION['autenticado'] = 'Não';
    header('Location: index.php?login=Erro');
}