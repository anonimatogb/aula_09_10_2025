<?php
require_once "C:/Turma1/xampp/htdocs/aula_09_10_2025/MVC/Model/UsuarioModel.php";

class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function listar() {
        $usuarios = $this->usuarioModel->buscarTodos();
        include_once "C:/Turma1/xampp/htdocs/aula_18_09_2025/MVC/View/Usuario/listar.php";
        return $usuarios;
    }
     public function buscarUsuario($id) {
        $usuario = $this->usuarioModel->buscarUsuario($id);
        return $usuario;
    }
 
    public function cadastrar($nome,$descricao,$quantidade,$codigobarra,$preco){
return $this-> usuarioModel->cadastrar($nome,$descricao,$quantidade,$codigobarra,$preco);


    }
   public function editar($nome,$descricao,$quantidade,$codigobarra,$preco,$id){
 $this-> usuarioModel->editar($nome,$descricao,$quantidade,$codigobarra, $preco, $id);


    }


     public function deletar($id){
 $usuario = $this-> usuarioModel->deletar($id);
return $usuario;

    }
}
?>
