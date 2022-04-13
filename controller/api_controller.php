<?php
   class api_controller{
      public static function mostrar_chamados(){
         include_once( "./conexao/data_base.php");
         $sql = $pdo->prepare("SELECT * FROM tb_chamado");
         $sql->execute();
         $dados = $sql->fetchAll(PDO::FETCH_OBJ);
         return $dados;
      }
       
      public static function incluir_chamado( $titulo, $categoria, $descricao){
         include_once( "./conexao/data_base.php");
         $sql = $pdo->prepare("INSERT INTO tb_chamado (titulo, categoria, descricao, data_chamado)
                               VALUES (?, ?, ?, now())");
         $sql->execute([$titulo, $categoria, $descricao]);
      }
   }
?>