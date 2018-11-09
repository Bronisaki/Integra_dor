<?php

$user = $_GET['user'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$firstname = $_GET['firstname'];
$cpf = $_GET['cpf'];
$rua = $_GET['rua'];
$numero = $_GET['numero'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$datanasc = $_GET['datanasc'];
$cep = $_GET['cep'];
$estado = $_GET['estado'];
$pais = $_GET['pais'];
$telefone = $_GET['telefone'];


require "conexao.php";

$sql = "insert into cliente (user, email, senha, nome, cpf, rua, numero, bairro, cidade, datanasc, cep, estado, pais, telefone)
                    values(:user, :email, :senha, :nome, :cpf, :rua, :numero, :bairro, :cidade, :datanasc, :cep, :estado, :pais, :telefone)";

$qry = $con->prepare($sql);
$qry->bindParam(':user', $user, PDO::PARAM_STR);
$qry->bindParam(':email', $email, PDO::PARAM_STR);
$qry->bindParam(':senha', $senha, PDO::PARAM_STR);
$qry->bindParam(':nome', $firstname, PDO::PARAM_STR);
$qry->bindParam(':cpf', $cpf, PDO::PARAM_STR);
$qry->bindParam(':rua', $endereco, PDO::PARAM_STR);
$qry->bindParam(':numero', $numero, PDO::PARAM_STR);
$qry->bindParam(':bairro', $bairro, PDO::PARAM_STR);
$qry->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$qry->bindParam(':datanasc', $datanasc, PDO::PARAM_STR);
$qry->bindParam(':cep', $sep, PDO::PARAM_STR);
$qry->bindParam(':estado', $estado, PDO::PARAM_STR);
$qry->bindParam(':pais', $pais, PDO::PARAM_STR);
$qry->bindParam(':telefone', $telefone, PDO::PARAM_STR);
$qry->execute();
echo $qry->rowCount();

?>