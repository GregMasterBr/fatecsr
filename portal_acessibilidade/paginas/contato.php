<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <meta name="description" content="Portal de informações sobre Acessibilidade. o tema é abordado de forma aberta, trazendo dicas, informações e recursos a comunidade na qual está inserida.">
 <meta name="keywords" content="Contato, Deixe sua Mensagem,Acessibilidade,Acessa Legal, Acessibilidade na Web, Web Semântica" />
 <meta name="author" content="Gregorio, GregMaster, Thelma, Bendel, Shirley">
 <title>Contato ::: AWL</title>
 <!-- Favicons -->
  <link rel="icon" href="../favicon.ico">
  <!-- Bootstrap -->
  <link rel="stylesheet" id="bs-css"  href="../css/bootstrap.min.css">
   <!-- Bootstrap core CSS -->
  <link href="../css/blog.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link  rel="stylesheet"href="../css/fix-estilo.css" rel="stylesheet">
</head>
<body>
<div class="pagina">
         <!--Aqui entra nosso menu-->

         <?php include('../includes/menu-superior.php'); ?>
 
  <!-- Begin .contact-section -->
  <section id="contact" class="contact-section section-global-wrapper">
    
    <div class="container">
           <ol class="breadcrumb">
           <img src="../img/breadcrumb.png" alt="Breadcrumb, mostra a página atual e a arvore para se chegar no link">
           <li><a href="../index.php" title="Página principal - Tecla de atalho (1)." accesskey="1">Home</a></li>
           <li><a href="#">Contato</a></li>
           <li class="active">Deixe sua Mensagem</li>
         </ol>
      <div class="row">
        <div class="contact-header">
          <h3 class="contact-header-title headings">DEIXE SUA MENSAGEM</h3>
          <p class="contact-header-body">Que tal uma experiência diferente para o seu negócio? Mande seu contato que retornaremos!</p>
        </div>
      </div>
    </div>
  
  </section>
  <!-- End .contactsection -->
  
  <!-- Begin .feedbacksection -->
  <section id="feedback" class="feedback-section section-global-wrapper">
    
    <div class="container">
      <div class="row">
        
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <main class="feedback-form" id="conteudo-principal">
          
            <div id="contact-response"></div>
            
            <form action="enviar_contato.php" method="post" id="contact-formX">
              <fieldset>
                <div class="form-group form-group-fullname">
                  <label class="control-label" for="nome">NOME *</label>
                  <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                </div>
                <div class="form-group form-group-email">
                  <label class="control-label" for="email">E-MAIL *</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail">
                </div>
                <div class="form-group form-group-message">
                  <label class="control-label" for="message">MENSAGEM *</label>
                  <textarea class="form-control" name="messagem" id="messagem" rows="3"></textarea>
                </div>             
                <button type="button"  class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm" >Enviar</button>
              </fieldset>
            </form>
          
          </main>          
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
          
          <div class="address-section">
            <div class="address-icon"><i class="fa fa-map-marker"></i></div>
            <h4 class="address-title">Contate-nos</h4>
            <address>
              Av.  Rudolf Dafferner, 400, Edifício Roma, Sala 108<br>
              Sorocaba | São Paulo<br />
              <abbr title="Phone">Telefone:</abbr> (15) 3346 7347
            </address>
            <br />
          
          </div>
        
        </div>
      
      </div>
    </div>
  
  </section>
  <!-- End .feedbacksection -->
        <div id="map-canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.5626554713244!2d-47.426856!3d-23.476235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf607455a77a43%3A0xa8d94bf38d8f08ac!2sAv.+Rudolf+Dafferner%2C+400+-+Boa+Vista%2C+Sorocaba+-+SP!5e0!3m2!1spt-BR!2sbr!4v1430315692891"></iframe></div>
  <!-- Begin sitefooter -->
  <footer id="footer" class="site-footer">
  
    <div class="footer-copyright">Acompanhe nosso trabalho também pelas mídias sociais </div>
      <br />
    <ul class="widget_social-list-wrapper widget_social-two list-inline clearfix">
      <li class="facebook"><a href="#" target="_blank" title="Facebook" data-toggle="tooltip">Facebook</a></li>
      <li class="gplus"><a href="#" target="_blank" title="Google +" data-toggle="tooltip">Google +</a></li>
      <li class="linkedin"><a href="#" target="_blank" title="Linkedin - Oficial" data-toggle="tooltip">Linkedin</a></li>
    </ul>
  
  </footer>
  <!-- End .sitefooter -->
<?php 
      //definir credito das paginas
      $credito="Gregorio";
      include('../includes/rodape.php');
?>
</div>

<div class="modal fade bs-example-modal-sm in" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="mySmallModalLabel"><i class="fa fa-paper-plane"></i> &nbsp;Mensagem Enviada<a class="anchorjs-link" href="#mySmallModalLabel"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div class="modal-body">
          Obrigado pelo Contato, retornaremos em breve.
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>