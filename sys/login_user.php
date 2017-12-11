<?php
if(isset($_POST['email'])){
  include_once "../classes/config.php";
  require_once("../classes/BD.class.php");
  BD::conn();

  $email = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING))) );
  $senha = utf8_decode( strip_tags(trim(filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING))) );

  $pegaUser = BD::conn()->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
  $pegaUser->execute(array($email,$senha));

  if($pegaUser->rowCount() == 0){
   echo "<script>
   alert('Não encontramos o email!');
   window.location='../login.php';
   </script>"; 
 }else{
   session_start();
   while($row = $pegaUser->fetchObject()){
    $_SESSION['email'] = $email;
    $_SESSION['nome'] = $row->nome;
    $_SESSION['id'] = $row->id;
   }
   echo "<script>
   alert('Seja bem vindo!');
   window.location='../home.php';
   </script>";    
 }    

}



?>