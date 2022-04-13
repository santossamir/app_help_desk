<?php
        $hostname = 'localhost';
        $nomeDoBanco = 'db_help_desk';
        $usuario = 'root';
        $senha = '';
    
        try{
            $pdo = new PDO('mysql:host='.$hostname.';dbname='.$nomeDoBanco,$usuario,$senha,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"]);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   
        }catch(PDOException $e){
            echo "Erro ao conectar ao banco de dados";
            echo $e->getMessage();
        }

?>