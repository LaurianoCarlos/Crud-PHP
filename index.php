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
  
  <?php

  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }


  ?>

</body>

</html>