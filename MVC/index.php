

<?php
require_once"DB/Database.php";
require_once"Controller/UsuarioController.php";

$usuarioController = new UsuarioController($pdo);
$produtos = $usuarioController->listar();





?>

