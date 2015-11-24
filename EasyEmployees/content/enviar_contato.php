<?php
//aponta o nome do arquivo para conexão do banco que estaria no arquivo insere
include ('../includes/conexao.php');
//select do banco fatec1
mysqli_select_db($ligax, 'projeto');

$goBack="cadastrar.php";

    $nome=$_POST["nome"];
    $idade=$_POST["idade"];
    $departamento=$_POST["departamento"];
    $salario=$_POST["salario"];
    $telefone=$_POST["telefone"];

//variavel de inserção no banco de dados com os campos que estaria no arquivo insere
$insere = " INSERT INTO Funcionarios ( nome, departamento, idade, salario, telefone)
VALUES (' ".$nome." ' , ' ".$departamento." ' , ' ".$idade." ' , ' ".$salario." ' , ' ".$telefone." ')";

//resultado da inserção da variável
    $result = mysqli_query($ligax, $insere);


if ($result==1) {
        echo "<script> 
                alert('Dados inseridos com sucesso!');                
                </script>";
    }else {
      echo "<script> 
                alert('Dados não inseridos!');                
                </script>";    
      
        }
  echo "<script> document.location.href='$goBack';</script>";
  
?>