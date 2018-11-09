<?php
$nome = $_POST["nome"];

require "conexao.php";

$qry = $con->prepare("select * from produto");




?>