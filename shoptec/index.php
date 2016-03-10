<?php
    include ('includes/connection.php');
    //$query_recommended = "Select * from products where favorite = false";
    $query_recommended = "SELECT p.id,p.product,p.price,p.discount,  p.reviews,p.like_product,p.favorite,p.description, g.path, g.tags FROM products p left JOIN galery g ON p.id=g.product  where p.favorite = false";

    $result = mysqli_query($conn, $query_recommended);
    $nregistros = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gregorio, Gustavo">

    <title>Shop Fatec - Promoção de Verdade</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ShopTec</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#">Promoções</a>
                    </li>
                    <li>
                        <a href="#">Minha Conta</a>
                    </li>
                    <li>
                        <a href="#">Meus Pedidos</a>
                    </li>
                    <li>
                        <a href="#">Atendimento</a>
                    </li>
                    <li>
                        <a href="#">Wow!</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <div class="col-md-12">
                <h2>Destaque da Semana</h2>
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <h4>Produtos Recomendados</h4>

                <div class="row">

                        <?php


                            for ($i=0; $i<$nregistros; $i++){
                             echo '<div class="col-sm-4 col-lg-4 col-md-4">';
                                 echo '<div class="thumbnail">';
                                        $registro = mysqli_fetch_assoc($result);

                                        $urlImg="http://placehold.it/420x300";
                                        if($registro['path']){
                                             $urlImg = "img/".$registro['path'];
                                        }
                                        echo '<img src='.$urlImg.' alt="" class="img-product" />';
                                        echo '<h4 class="pull-right- price"> R$'.$registro['discount'].'</h4>';
                                        echo '<div class="caption">';
                                              //echo '<h4 class="pull-right- price"> R$'.$registro['discount'].'</h4>';
                                              echo '<h4><a href="#">'.$registro['product'].'</a></h4>';
                                              echo ' <p>'.$registro['description'].'.<a target="_blank" href="#"> Mais detalhes</a></p>';
                                        echo '</div>';
                                        echo '<div class="ratings">';
                                             echo '<p class="pull-right">'.$registro['reviews'].' reviews</p>';
                                            echo '<p>';
                                            for($j=1; $j<6; $j++){
                                                if($j<=$registro['like_product']){
                                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                                }else{
                                                    echo '<span class="glyphicon glyphicon-star-empty"></span>';
                                                }
                                             }
                                             echo '</p>';

                                             echo '<div class="opt-buy">';
                                                   echo '<button type="button" class="btn btn-warning left">Reservar</button>';
                                                   echo'      ';
                                                   echo '<button type="button" class="btn btn-success text-right">COMPRAR</button>';
                                             echo '</div>';
                                             echo '</br>';
                                        echo ' </div>';
                                 echo ' </div>';
                              echo ' </div>';
                             }

                        ?>




                    <div class="col-sm-4 col-lg-4 col-md-4 text-center">
                        <h4><a href="#">Quer mais desconto?</a>
                        </h4>
                        <p>Assine nossa newslater e solicite nosso cartão. Leia nossa recomendação <a target="_blank" href="#/"> solicitar cartãol</a> e aproveite descontos exclusivos! Parcele suas compras em até 20X sem juros.</p>
                        <img src="img/cartao-credito.png" alt="" class="cartao-credito" />

                        <a class="btn btn-primary btn-block" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">Solicitar Cartão</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; GregMaster & Fofura 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
