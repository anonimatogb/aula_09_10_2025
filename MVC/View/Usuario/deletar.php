<?php


require_once "C:/Turma1/xampp/htdocs/aula_09_10_2025/MVC/Controller/UsuarioController.php";
require_once "C:/Turma1/xampp/htdocs/aula_09_10_2025/MVC/DB/DataBase.php";

$UsuarioController = new UsuarioController($pdo);

if(isset($_GET['id'])){

  $id = $_GET['id'];
  $produto = $UsuarioController->deletar($id);
  header("location: ../../index.php");}
  else{
header("location: ../../index.php");
 
  }

 



?>