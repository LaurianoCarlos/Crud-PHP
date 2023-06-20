<?php
session_start();
ob_start();
?>

<html>

<head>
  <title>PHP Test</title>
</head>

<body>
  <h2>PHP - Cadastrar Usuario</h2>

  <a href="list.php">LISTAR</a> <br>
  <a href="create.php">CADASTRAR</a> <br>
  <a href="index.php">INICIO</a> <br>


  <?php
  require './User.php';

  $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);


  if (!empty($formData['SendAddUser'])) {
    //var_dump($formData);
    $createUser = new User();
    $createUser->formData = $formData;
    $value = $createUser->create();

    if ($value) {
      $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado cm sucesso<p>";
      header("Location: index.php");
    } else {
      echo "<p style='color:red;'>Erro ao cadastrar<p>";
    }
  }
  ?>

  <br>
  <br>
  <form name="CreateUSer" method="POST" action="">
    <label>Nome</label>
    <input type="text" name="nome" placeholder="Nome Completo" required><br><br>

    <label>Email</label>
    <input type="email" name="email" placeholder="Email" required><br><br>

    <input type="submit" value="Cadastrar" name="SendAddUser">

  </form>

</body>

</html>