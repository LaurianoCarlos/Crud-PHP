<?php
session_start();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>PHP Test</title>
</head>

<body>
  <header>
    <h2>PHP - FORMULÁRIO</h2>
    <nav>
      <a href="list.php">LISTAR</a> <br>
      <a href="create.php">CADASTRAR</a> <br>
      <a href="index.php">INICIO</a> <br>
    </nav>
  </header>
  <main>
    <?php
    require './User.php';

    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }

    //receber os dados do formulario
    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($formData['SendEditUser'])) {
      $editUSer = new User();
      $editUSer->formData = $formData;
      $editUSer->id = $id;
      $value = $editUSer->edit();

      if ($value) {
        $_SESSION['msg'] = "<p style='color:green;'>Usuario editado com sucesso<p>";
        header("Location: index.php");
      } else {
        echo "<p style='color:red;'>Erro ao Editar<p>";
      }
    }

    if (!empty($id)) {
      $viewUser =  new User();
      $viewUser->id = $id;
      $valueUser = $viewUser->view();

      extract($valueUser);
    } else {
      $_SESSION['msg'] = "<p style='color:red;'>Usuario não encontrado<p>";
      header("Location: index.php");
    }
    ?>
    <br>
    <form name="EditUSer" method="POST" action="">
      <input type="hidden" name="id" value="<?php echo $id ?>" />
      <label>Nome</label>
      <input type="text" name="nome" placeholder="Nome Completo" value="<?php echo $nome ?>" required /><br><br>
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>" required /><br><br>

      <input type="submit" value="Editar" value="<?php echo $nome ?>" name="SendEditUser">
    </form>
  </main>
</body>
</html>