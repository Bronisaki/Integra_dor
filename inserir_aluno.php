<?php

$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

require "conexao.php";

$sql = "insert into alunos (nome, nota1, nota2, nota3)
					values (:nome, :nota1, :nota2, :nota3)";
$qry = $con->prepare($sql);
$qry->bindParam(':nome', $nome, PDO::PARAM_STR);
$qry->bindParam(':nota1', $nota1, PDO::PARAM_STR);
$qry->bindParam(':nota2', $nota2, PDO::PARAM_STR);
$qry->bindParam(':nota3', $nota3, PDO::PARAM_STR);

$qry->execute();
echo $qry->rowCount();


//http://localhost/appalunos/inserir_aluno.php?nome=Miguel&nota1=9&nota2=8&nota3=7


?>