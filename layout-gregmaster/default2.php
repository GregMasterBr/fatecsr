<!DOCTYPE html>
<?php 
include("conexao.php");

/*variavel dpar amanipular a entrada do navegador*/
$navegador = $_SERVER['HTTP_USER_AGENT'];
$arquivo="pdf/";
if (preg_match('?MSIE ([0-9].[0-20]{1,2})?', $navegador, $matched))
{
	/*$browser_version = $matched[1];*/
	$browser = 'Internet Explorer';
	$arquivo.="instalacao_ie.pdf";

}

/*elseif (preg_match('?rv:([0-9\.]+)?', $navegador, $matched))
{
	$browser_version = $matched[1];
	$browser = 'Internet Explorer';
	$arquivo.="instalacao_ie.pdf";
}
*/

elseif (preg_match('?Opera/([0-9].[0-9]{1,2})?', $navegador, $matched))
{
	/*$browser_version = $matched[1];
	$browser = 'Opera';*/
	$arquivo.="instalacao_firefox.pdf";
}
elseif (strrpos($navegador, 'OPR'))
{
	$posicao_inicial = strpos($navegador, 'OPR') + strlen('OPR');
	$browser_version = substr($navegador, $posicao_inicial, 5);
	$browser = 'Opera';
	$arquivo.="instalacao_chrome.pdf";
}

elseif (preg_match('?Firefox/([0-9\.]+)?', $navegador, $matched))
{
	/*$browser_version = $matched[1];*/
	$browser = 'Firefox';
	$arquivo.="instalacao_firefox.pdf";
}
elseif (preg_match('?Chrome/([0-9\.]+)?', $navegador, $matched))
{
	/*$browser_version = $matched[1];*/	
	$browser = 'Chrome';
	$arquivo.="instalacao_chrome.pdf";
}
elseif (preg_match('?Safari/([0-9\.]+)?', $navegador, $matched))
{
	/*$browser_version = $matched[1];*/
	$browser = 'Safari';
	$arquivo.="instalacao_chrome.pdf";
}
else
{
// browser not recognized!
	$browser_version = 0;
	$browser = 'Navegador Desconhecido';
	$arquivo.="instalacao_ie.pdf";
}
?>

<html lang="pt=BR">
  <head>
    <meta charset="utf-8">
	<!--meta charset="iso-8859-1"-->
    <title>:::Aditiva Consultoria|Kit Corretor:::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site realizado para redirecionar o corretor ao download do seu kitcorretor">
    <meta name="author" content="GregMaster, Gregório de Almeida Queiroz, www.grgmaster.com.br,www.gregorioalmeidaqueiroz.wordpress.com">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
      <script src="js/jquery.js"></script>
	<!--script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script-->
	<!---Achei aqui http://www.jeasyui.com/tutorial/form/form1.php->
	<!--script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script-->
		
	<script type="text/javascript" src="js/jeasyui.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="img/favicon.ico">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
			<img src="img/aditiva.ico" alt="Logo da Aditiva Consultoria" /> <a class="texto_topo" href="http://www.aditivaconsultoria.com.br/" target="_blank" title="Aditiva Consultoria">Aditiva Consultoria</a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
		  <p class="utilitario">UTILITÁRIOS</p> <br />
            <ul class="nav nav-list">
              <li class="active"><a href="#">MANUAL *</a></li>
			    <li><a href="#">INSTRUÇÕES *</a></li>
				<ul class="nav nav-list">
					<!--li class="nav-header"><a href="pg/acessodados.html" >Acesso a Dados</a></li-->
					<li class="nav-header teste"><a href="pdf/instalacao_ie.pdf"  target="_blank"><img src="img/ie.png" class="icones-sidebar" />Download no IE</a></li>
					<li class="nav-header"><a href="pdf/instalacao_chrome.pdf" target="_blank"><img src="img/chrome.png" class="icones-sidebar" />Download no Google Chrome</a></li>
					<li class="nav-header"><a href="pdf/instalacao_firefox.pdf" target="_blank"><img src="img/firefox.png" class="icones-sidebar" />Download no Mozila</a></li>
					<li class="nav-header"><a href="pdf/instalando_kitcorretor.pdf" target="_blank" ><img src="img/instalando.png" class="icones-sidebar" />Instalando</a></li>
				</ul>
				
              <li><a href="#"><img src="img/dicas.png" class="icones-sidebar" />DICAS *</a></li>
              <li><a href="#"><img src="img/videos.png" class="icones-sidebar" />VÍDEOS *</a></li>
              <li class="nav-header"><small><em>Indisponível no momento*</em></small></li>
              <!--li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li-->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
<?php

	

	global  $existe;
	if(isset($_GET['id'])) {
			$codigo_corretor = $_GET['id'];
		    $query="SELECT dc.link,c.nome_corretor,c.sexo from download_kitcorretor as dc,corretor_ativo as c where c.Corretor=dc.corretor and dc.corretor='" .$codigo_corretor . "'" ." limit 1";
			$resultado = mysql_query($query,$conexao) or die (mysql_error());
			if (mysql_num_rows($resultado)>0)
			{
			  $resultado2 = mysql_fetch_array($resultado);
			  global  $nome;
			  global $a;
			  global  $sexo;	
			  $a=($resultado2['link']);
			  $nome=($resultado2['nome_corretor']);
			  $sexo=($resultado2['sexo']);
			  $existe =true;
			  //echo ($resultado2['link']);	 
			}else
			{
			 $existe=false;
			  //print "Não foi possível localizar o corretor!";
			}
			
		} 
?>
		

        <div class="span9 conteudo-centro">
          <div class="hero-unit">
		  <?php 
		 if ($existe ==true){
				$saudacao="Seja bem vindo";
				if ($sexo=="F"){
					$saudacao="Seja bem vinda";
					
				}
				echo "<h2>"; echo $saudacao; echo", " ; echo $nome; echo "</h2> <br/>";
			}
		  ?>
	
            <h1 class="titulo kitcorretor">KIT CORRETOR</h1>
            <!--p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p-->
		
			<p class="texto">O Sistema <strong>Kit Corretor</strong> desenvolvido pela Aditiva Consultoria presente no mercado há 15 anos no ramo de consultoria para Corretores de Seguros, veio para agregar aos seus utilizadores valor ao seu trabalho diário, favorecendo o controle e a gestão
				da sua produção. Está é uma edição <em>Beta</em>, disponível para captar e agregar suas necessidades ao produto. Baixe seu aplicativo e comece a usar hoje mesmo.<br />
				Grupo Aditiva Consultoria agradece.
			</p>
			 <?php 
				if ($existe==true){
					echo "<p class='btn_download'>
				
						<form id='ff' action='gravar2.php' method='post' enctype='multipart/form-data' onsubmit='ChamarPdf();'>
							<input type='hidden' name='id' id='id' value='$codigo_corretor'/>
							<input type='hidden' name='link' id='link' value='$a' class='arq_kitcorretor' />  
							<input type='submit' class='btn btn-primary btn-lg' value='Clique aqui para efetuar o Download &raquo;'/>
						</form> 
					</p>";
				}
				?>
          </div>
         </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer class="rodape default">
        <p class="aditiva">&copy; Aditiva Consultoria 2014 - Todos os Direitos Reservados</p>
      </footer>

    </div>
	<script type="text/javascript">
		$(function(){
			$('#ff').form({
				success:function(data){
					$.messager.alert('Info', data, 'info');
				
				}
			});
		});

	</script>

	<script>	
	function ChamarPdf(){
		var a = document.createElement('a');
			//a.href='pdf/instalacao_chrome.pdf';
			a.href='<?php echo $arquivo;?>';
			a.target = '_blank';
			document.body.appendChild(a);
			a.click();
	}
	</script>	
  </body>
</html>

