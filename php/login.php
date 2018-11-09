<?php
$user = $_POST["user"];
$senha = $_POST["senha"];


// $_POST["user"];
// $_POST["senha"];

require "conexao.php";

$qry = $con->prepare("select * from clientes where user = :user and senha = :senha");
$qry->bindParam(':user', $user, PDO::PARAM_STR);
$qry->bindParam(':senha', $senha, PDO::PARAM_STR);
$qry->execute();
$dados = array();
	while($row = $qry->fetch()) {
	    $dados[] = $row;
	}
	return $dados;
// echo $qry->rowCount();




?>