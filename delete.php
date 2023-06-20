<?php 
session_start();

ob_start();//limpa o buff de saida

//receber o id da URl
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
//var_dump($id);


if(!empty($id)){
    //incluir arquivos
    require './User.php';

    //Instanciar a classe e cria o objeto
   $deleteUser = new User();

   //enviar o id
   $deleteUser->id = $id;
  $value = $deleteUser->delete();

  if($value){
    $_SESSION['msg'] = "<p style='color:green;'>Usuario apagado com sucesso!<p>";
    header("Location: index.php");  
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao excluir<p>";
    header("Location: index.php");  
  }

}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não encontrado<p>";
    header("Location: index.php");  
}

?>