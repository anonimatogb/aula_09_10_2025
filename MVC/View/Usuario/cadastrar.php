<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>            
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

         <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required><br>

         <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required><br>

        <label for="codigobarra">Código de Barras:</label>
        <input type="text" name="codigobarra" required><br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" required><br>

        <input type="submit">
    </form>
</body>
</html>

<?php

require_once "C:/Turma1/xampp/htdocs/aula_09_10_2025/MVC/Controller/UsuarioController.php";
require_once "C:/Turma1/xampp/htdocs/aula_09_10_2025/MVC/DB/DataBase.php";

$UsuarioController = new UsuarioController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome = $_POST['nome'];
  $decricao = $_POST['descricao'];
  $quantidade = $_POST['quantidade'];
  $codigobarra = $_POST['codigobarra'];
  $preco = $_POST['preco'];


  $UsuarioController -> cadastrar( $nome, $descricao, $quantidade, $codigobarra, $preco);
  header("Location: ../../index.php");
}
  

?>