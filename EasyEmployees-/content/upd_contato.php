<?php
//aponta o nome do arquivo para conexão do banco que estaria no arquivo insere
include ('../includes/conexao.php');
//select do banco fatec1
mysqli_select_db($ligax, 'projeto');

$goBack="cadastrar.php";
    $id=$_GET['idFunc'];
    $nome= isset($_POST["nome"])?$_POST["nome"]:"";
    $idade= isset($_POST["idade"])?$_POST["idade"]:"";
    $departamento= isset($_POST["departamento"])?$_POST["departamento"]:"";
    $salario= isset($_POST["salario"])?$_POST["salario"]:"";
    $telefone= isset($_POST["telefone"])?$_POST["telefone"]:"";

//variavel de inserção no banco de dados com os campos que estaria no arquivo insere
$update = " Update Funcionarios set  nome='".$nome."',departamento='".$departamento."', idade='".$idade."', salario='".$salario."', telefone='".$telefone."'     WHERE Id=".$id; 

$result = mysqli_query($ligax, $update);


if ($result==1) {
        echo "<script> 
                alert('Dados atualizados com sucesso!');      
                
                </script>";
 
    }else {
      echo "<script> 
                alert('Dados não atualizados!');                
                </script>";    
      
        }

  echo "<script> document.location.href='http://localhost/EasyEmployees/index.php';</script>";
  
?>