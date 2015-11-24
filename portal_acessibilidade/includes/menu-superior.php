<?php 
  $path="/portifolio/portal_acessibilidade/";
 ?>
 
<!DOCTYPE html>

<html lang="pt-BR">
<head>
 <meta charset="UTF-8" >
 <!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/textLarge.css" title="large" media="all"  />
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/textSmall.css" title="small" media="all"  />
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/fundo-pastel.css" title="fundo-pastel" media="all"  />
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/fundo-preto.css" title="fundo-preto" media="all"  />
</head>
<body>
<script type="text/javascript" src="<?php echo $path; ?>js/styleswitcher.js"></script>
   <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top"> 
	<!-- Fixed navbar --> 
	<!--Caso queiram, deixar o menu fixo � so descomentar a linha de baixo e comentar a linha de cima-->
    <!--nav class="navbar navbar-default navbar-fixed-top"-->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $path; ?>index.php">Acessa Web Legal  <img src="<?php echo $path; ?>img/acessa-legal-web-awl-logo.png" title="" alt=" " /><span class="sr-only">(Logo)</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav" role="menu">
            <li class="active"><a href="<?php echo $path; ?>index.php">Home</a></li>
            <li><a href="<?php echo $path; ?>paginas/sobre.php" >Sobre</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Deficiências<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $path; ?>paginas/deficiencia-auditiva.php" data-access="true" aria-label="Acessar conteúdo sobre Deficiência Auditiva" title="Acessar conteúdo sobre Deficiência Auditiva">Auditiva</a></li>
                <li><a href="<?php echo $path; ?>paginas/deficiencia-cognitiva.php" data-access="true" aria-label="Acessar conteúdo sobre Deficiência Cognitiva"  title="Acessar conteúdo sobre Deficiência Cognitiva">Cognitiva</a></li>
                <li><a href="<?php echo $path; ?>paginas/deficiencia-motora.php" data-access="true" aria-label="Acessar conteúdo sobre Deficiência Motora" title="Acessar conteúdo sobre Deficiência Motora">Motora</a></li>
                <li><a href="<?php echo $path; ?>paginas/deficiencia-visual.php" data-access="true" aria-label="Acessar conteúdo sobre Deficiência Visual" title="Acessar conteúdo sobre Deficiência Visual">Visual</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Leis & Artigos</li>
                <li><a href="http://www.planalto.gov.br/ccivil_03/leis/l10098.htm" target="_blank" aria-label="Acessar conteúdo sobre as legislações em vigor">Legislação</a></li>
                <li><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/upload/pessoa_com_deficiencia/parte1.pdf"  target="_blank" aria-label="Acessar conteúdo sobre as normas em vigor">Normas</a></li>
              </ul>
            </li>
            <li><a href="<?php echo $path; ?>paginas/contato.php">Contato</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      <div class="configuracao-estilos">
        <ul class="list-unstyled list-inline">
          <li><a href="#conteudo-principal" tabindex="1" class="lnkContent">Ir para o conteúdo</a></li>
          <li><a href="#" onclick="setActiveStyleSheet('default'); return false;" title="Default do Sistema"><img src="<?php echo $path; ?>img/fundo-default.gif" alt=" "></a></li>
          <li><a href="#" onclick="setActiveStyleSheet('small'); return false;" title="Fonte Menor"><img src="<?php echo $path; ?>img/small-font.gif" alt=" "></a></li>
          <li><a href="#" onclick="setActiveStyleSheet('large'); return false;" title="Fonte Maior"><img src="<?php echo $path; ?>img/large-font.gif" alt=" "></a></li>
          <li><a href="#" onclick="setActiveStyleSheet('fundo-pastel'); return false;" title="Contraste Fundo Pastel"><img src="<?php echo $path; ?>img/fundo-pastel.gif" alt=" "></a></li>
          <li><a href="#" onclick="setActiveStyleSheet('fundo-preto'); return false;" title="Contraste Fundo Preto"><img src="<?php echo $path; ?>img/fundo-preto.gif" alt=" "></a></li>
        </ul>
      </div>  
    </nav>	
  </body>
  </html>  