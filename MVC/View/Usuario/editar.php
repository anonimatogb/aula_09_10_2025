<?php

require_once "C:/Turma1/xampp/htdocs/aula_09_10_2025/MVC/Controller/UsuarioController.php";
require_once "C:/Turma1/xampp/htdocs/aula_09_10_2025/MVC/DB/DataBase.php";

$UsuarioController = new UsuarioController($pdo);

if(isset($_GET['id'])){

  $id = $_GET['id'];
  $usuario = $UsuarioController->buscarUsuario($id);

 



?>
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
        <input type="text" name="nome" value="<?=$usuario['nome'];?>" required><br>

         <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" value="<?=$usuario['descricao'];?>" required><br>

         <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="<?=$usuario['quantidade'];?>" required><br>

        <label for="codigobarra">Código de Barras:</label>
        <input type="text" name="codigobarra" value="<?=$usuario['codigobarra'];?>" required><br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" value="<?=$usuario['preco'];?>" required><br>


  <input type="submit">



    </form>
</body>
</html>

<?php

}else{
    header('Location: listar.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $quantidade = $_POST['quantidade'];
  $codigobarra = $_POST['codigobarra'];
  $preco = $_POST['preco'];

  $UsuarioController ->editar( $nome,$descricao,$quantidade,$codigobarra,$preco,$id);
  header('Location: ../../index.php ');
}
?>