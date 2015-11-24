<?php

include ('../includes/conexao.php');
$goBack="../index.php";
//select do banco fatec1
mysqli_select_db($ligax, 'projeto');

    $delete="DELETE from funcionarios Where Id=".$_GET['id'];
    $result = mysqli_query($ligax, $delete);
    if($result ==1){
      echo "<script>  alert('Contato removido com sucesso.');   </script>";        
     echo "<script> document.location.href='$goBack';</script>";    
    }else{
        echo "<script> document.location.href='$goBack';</script>";     
    }

?>