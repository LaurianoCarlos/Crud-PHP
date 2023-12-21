<?php
session_start();
ob_start();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
  require './User.php';

  $deleteUser = new User();
  $deleteUser->id = $id;
  $value = $deleteUser->delete();

  if ($value) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuario apagado com sucesso!<p>";
    header("Location: index.php");
  } else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao excluir<p>";
    header("Location: index.php");
  }
  } else {
  $_SESSION['msg'] = "<p style='color:red;'>Usuario não encontrado<p>";
  header("Location: index.php");
  }
