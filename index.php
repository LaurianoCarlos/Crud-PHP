<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>PHP Test</title>
</head>

<body>
  <header>
    <h2>PHP - LISTAR</h2>
    <nav>
      <a href="list.php">LISTAR</a> <br>
      <a href="create.php">CADASTRAR</a> <br>
    </nav>
  </header>
  <main>
    <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
  </main>
</body>
</html>