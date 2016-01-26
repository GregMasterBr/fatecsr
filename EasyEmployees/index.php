
<!DOCTYPE html>
<html lang="PT-Br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Gregorio, Thelma, Vanita, Jhon, Gustavo">
    <link rel="icon" type="image/png" href="favicon.png" />

    <title>Easy Employee</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

<?php    

    include ('includes/conexao.php');
    include("includes/menu.php");
    if(!$_SESSION["usuario"]){
      header('Location:'.$_SESSION["path"]."login.php");
      exit;
    } 
    mysqli_select_db($ligax, 'projeto');
    $consulta = "Select * from funcionarios";
    $result = mysqli_query($ligax, $consulta);
    $nregistros = mysqli_num_rows($result);
    //echo "Numero de Registros encontrados: $nregistros";      
?>

    <div class="container">
        <h1>Easy Employee</h1>
        <p>Sistema de consulta dos funcionários da unidade da Fatec São Roque.</p>
        <div class="panel panel-danger">
          <!-- Default panel contents -->
            <div class="panel-heading"><h4>Colaboradores Ativos</h4> </div>

        
            <div class="table-responsive">
              <table class="table table-bordered_ table-hover">
                 <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Departamento</th>   
                      <th></th>  
                  </tr>
                </thead>
                <tbody>
                     <?php
                        for ($i=0; $i<$nregistros; $i++){
                            $registro = mysqli_fetch_assoc($result);
                            echo'<tbody> <tr>';
                                echo'<td class="text-capitalize">'.$registro['nome'].'</td>';
                                echo'<td class="text-capitalize">'.$registro['idade'].'</td>';
                                echo'<td class="text-uppercase">'.$registro['departamento'].'</td>';
                                echo'<td class="text-right">
                                        <a onclick="deletar('.$registro['id'].');" class="btn btn-danger" >
                                            <img src="img/garbage12.png" title="Excluir Funcionário" />
                                        </a>

                                        <a href="content/editar.php?id='.$registro['id'].'" class="btn btn-info" >
                                              <img src="img/edition2.png" title="Editar Funcionário"  />
                                        </a>
                                    </td>';

                            echo '</tr> </tbody>';    
                        }
                    ?>
                </tbody>
              </table>
            </div>
        </div>    
    </div> <!-- /container -->

      <?php include("includes/rodape.php") ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
      function deletar(id) 
      {
           if (confirm("Você tem certeza que deseja remover o funcionário?"))
           {
               //alert("Aqui é porque confirmou.");
               location.href = 'content/deletar.php?id='+id;
           }
      }
    </script>
  </body>
</html>
