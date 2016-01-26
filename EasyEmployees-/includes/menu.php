<?php 
    session_start();
?>   
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href='<?php echo $_SESSION["path"]."index.php"; ?>'>Easy Employee    </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href='<?php echo $_SESSION["path"]."index.php"; ?>' >Funcionários</a></li>
            <li><a href='<?php echo $_SESSION["path"]."content/cadastrar.php"; ?>'>Cadastrar</a></li>
            <li><a href='<?php echo $_SESSION["path"]."login.php"; ?>'>(<?php echo $_SESSION["usuario"];?>) Sair </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>