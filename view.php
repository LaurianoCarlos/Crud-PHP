<?php
session_start();

//receber o id do usuario;
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<html>

<head>

  <title>PHP Test</title>
</head>

<body>
  <h2>PHP - Detalhes do Usuario</h2>

  <a href="list.php">LISTAR</a> <br>
  <a href="create.php">CADASTRAR</a> <br>
  <a href="index.php">INICIO</a> <br>
  <?php

  require './User.php';

  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  if (!empty($id)) {
    //enviando o id que veio da url spara User
    $viewUser =  new User();
    $viewUser->id = $id;
    $valueUser = $viewUser->view();
    //var_dump($valueUser);
    extract($valueUser);
    echo "Id do usuario: $id <br>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Cadastrado:" . date('d/m/y H:i:s', strtotime($created)) . "<br>";
    echo "Modificado:";

    if (!empty($modified)) {
      echo date('d/m/y H:i:s', strtotime($modified));
    }

    echo "<br>";
  } else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não encontrado<p>";
    header("Location: index.php");
  }
  ?>

</body>

</html>