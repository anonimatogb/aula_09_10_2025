<?php
$dsn = 'mysql: host = localhost; dbname=produtosz;charset=utf8';
$produto= 'root';
$senha= "" ;
try{
    $pdo = new PDO($dsn, $produto, $senha);
    $pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo"Conectado ao banco de dados !";
}catch(PDOException $e){
    echo"Erro: " . $e-> getMessage();

}
?>