<?php
session_start();

?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h2>PHP - LISTAR</h2>

    <a href="list.php">LISTAR</a> <br>
    <a href="create.php">CADASTRAR</a> <br>
    <a href="index.php">INICIO</a> <br>
    <?php 

    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
      require './User.php';
      $lista = new User();

      $result_users = $lista->lista();

      foreach($result_users as $row_user){
        //var_dump($row_user);
        extract($row_user);

        //echo 'Id: '. $row_user['id']. '<br>';
        echo "Id:  $id <br>";
        //echo 'Nome: '. $row_user['nome']. '<br>';
        echo "Nome: $nome <br>";
        //echo "Data de Criação: $created <br>";
        echo "<a href='view.php?id=$id'>Detalhes</a> <br>";
        echo "<a href='edit.php?id=$id'>Editar</a><br>";
        echo "<a href='delete.php?id=$id'>Apagar</a><br>";
        echo '<hr>';
      }
      ?> 

  </body>
</html>