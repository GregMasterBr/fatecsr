<?php
include "funcoes.php";
include "banco.php";

$funcionario["nome"] = $_POST["nome"];
$funcionario["idade"] = $_POST["idade"];
$funcionario["departamento"] = $_POST["departamento"];
$funcionario["salario"] = $_POST["salario"];
$funcionario["telefone"] = $_POST["telefone"];

gravar_funcionario($conecta,$funcionario);
?>