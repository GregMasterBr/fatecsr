
<!DOCTYPE html>
<html lang="PT-Br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Gregorio, Thelma, Vanita, Jhon, Gustavo">
    <link rel="icon" type="image/png" href="../favicon.png" />

    <title>Easy Employee</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/navbar-fixed-top.css" rel="stylesheet">
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

<?php    
    include ('../includes/conexao.php');
    include("../includes/menu.php");
    mysqli_select_db($ligax, 'projeto');
    $consulta = "Select * from funcionarios";
    $result = mysqli_query($ligax, $consulta);
    $nregistros = mysqli_num_rows($result);
    //echo "Numero de Registros encontrados: $nregistros";      
?>

    <div class="container">
        <h1>Easy Employee</h1>
        <p>Sistema de consulta dos funcioários da unidade da Fatec São Roque.</p>
        <br />
        <form action="enviar_contato.php" class="form-horizontal" method="post"  name="CadastrarForm">
        <div class="panel panel-primary">
          <!-- Default panel contents -->
            <div class="panel-heading"><h4>CADASTRAR FUNCIONÁRIO</h4></div>
            <div class="panel-body">
                    <div class="col-md-12">
                 
                      <div class="form-group text-left" >
                        <label class="control-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome"  name="nome" required />
                        <label  class=" control-label">Idade</label>
                            <input type="text" class="form-control" id="idade" placeholder="Idade" name="Idade" required />
                        <label  class=" control-label">Departamento</label>
                            <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento" required />
                        <label  class="control-label">Salário</label>
                            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salário"required />
                        <label class="control-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required />
                      </div>
                    </div>
            
            </div>
            
            <div class="panel-footer">
                    <div class="text-right">
                        <input type="submit" class="button btn btn-success" value="Cadastrar"/>
                        <input type="reset" class="button btn btn-warning" value="Limpar"/>
                    </div>
            
            </div>
        </div>
        </form>
        
        
    </div> <!-- /container -->

      <?php include("../includes/rodape.php") ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
