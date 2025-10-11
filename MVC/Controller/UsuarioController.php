<?php
require_once "C:/xampp/htdocs/aula_09_10_2025/MVC/Model/UsuarioModel.php";

class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function listar() {
        $usuarios = $this->usuarioModel->buscarTodos();
        include_once "C:/xampp/htdocs/aula_09_10_2025/MVC/View/Usuario/listar.php";
        return $usuarios;
    }
     public function buscarUsuario($id) {
        $usuario = $this->usuarioModel->buscarUsuario($id);
        return $usuario;
    }
 
    public function cadastrar($nome, $descricao, $quantidade, $codigobarra, $preco, $nomepaga, $tipo){
return $this-> usuarioModel->cadastrar($nome,$descricao,$quantidade,$codigobarra,$preco,$nomepaga,$tipo);


    }
   public function editar($nome,$descricao,$quantidade,$codigobarra,$preco,$nomepaga,$tipo,$id){
 $this-> usuarioModel->editar($nome,$descricao,$quantidade,$codigobarra, $preco,$nomepaga,$tipo, $id);


    }


     public function deletar($id){
 $usuario = $this-> usuarioModel->deletar($id);
return $usuario;

    }
}
?>
