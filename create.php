<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>PHP - CREATE</title>
</head>

<body>
  <header>
    <h2>PHP - LISTAR</h2>
    <nav>
      <a href="list.php">LISTAR</a> <br>
      <a href="create.php">CADASTRAR</a> <br>
      <a href="index.php">INICIO</a> <br>
    </nav>
  </header>
  <main>
    <?php
    require './User.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($formData['SendAddUser'])) {
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
    <form name="CreateUSer" method="POST" action="">
      <label>Nome</label>
      <input type="text" name="nome" placeholder="Nome Completo" required><br><br>
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" required><br><br>

      <input type="submit" value="Cadastrar" name="SendAddUser">
    </form>
  </main>
</body>
</html>