<?php
class UsuarioModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function buscarTodos(): array {
        $stmt = $this->pdo->query('SELECT * FROM usuarios');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function buscarUsuario($id): array {
        $stmt = $this->pdo->query("SELECT * FROM usuarios WHERE id = $id");
        return $stmt->fetch  (PDO::FETCH_ASSOC);
    }






    public function cadastrar($nome,$descricao,$quantidade,$codigobarra,$preco){
$sql = "INSERT INTO usuarios (nome, descricao, quantidade, codigobarra, preco) VALUES (:nome, :descricao, :quantidade, :codigobarra, :preco)";
$stmt = $this->pdo->prepare($sql);
return $stmt->execute([
    ':nome' => $nome,
     ':descricao' => $descricao,
      ':quantidade' => $quantidade,
      ':codigobarra' => $codigobarra,
      ':preco' => $preco,
]);


    }


   public function editar($nome,$descricao,$quantidade,$codigobarra,$preco,$id){
$sql = "UPDATE usuarios SET nome=?, descricao=?, quantidade=?, codigobarra=?, preco=? WHERE id=?";
$stmt = $this->pdo->prepare($sql);
return $stmt->execute([$nome,$nome,$descricao,$quantidade,$codigobarra,$preco,$id]);


    }



    public function deletar($id){
$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $this->pdo->prepare($sql);
return $stmt->execute([
   $id
]);


    }



}



?>