<?php
// Start the session
session_start();
$_SESSION["path"]=str_replace("login.php","",$_SERVER['PHP_SELF']);

?>
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

    <title>Login Easy Employee</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin"  name="LoginForm" method="post">
        <h2 class="form-signin-heading text-center" >Fazer Login</h2><br />
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Usuário" name="usuario"  autofocus>
         <br />
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Logar</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
    <?php 
        include ('includes/conexao.php');

            $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
            $senha = isset($_POST["senha"])?$_POST["senha"]:"";
            $where="WHERE usuario= '".$usuario."' and senha='".$senha."'";

        mysqli_select_db($ligax, 'projeto');
            
        $consulta = "Select * from login ".$where;
        //echo $consulta;
        $result = mysqli_query($ligax, $consulta);
        $nregistros = mysqli_num_rows($result);
        echo $result;
        if(strlen($usuario)>3){
           // echo $consulta." sadadadadad ".$nregistros;
            if( $nregistros==1){
                $_SESSION["usuario"] =$usuario;
                //echo $_SESSION["usuario"];
                echo "<script> document.location.href='index.php';</script>";  

            }else{
                  echo "<script>  alert('Usuário e Senha não cadastrado no sistema.');   </script>";    
            }
        }


    ?>
</html>
