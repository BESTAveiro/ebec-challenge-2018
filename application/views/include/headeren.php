<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-9">
    <link type="image/x-icon" href="<?php echo base_url('assets/img/logos/roldana_laranja-01.png') ?>" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website of EBEC Aveiro 2017 - A students engineering competition organized by BEST Aveiro.">
    <meta name="keywords" content="EBEC">
    <meta name="author" content="ITBugs">


    <title>EBEC Challenge Aveiro 2018</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/form-validation/css/formValidation.min.css') ?>"/>

    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/quote-carousel/quote-carousel.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fotorama-slider/fotorama.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/youtube-tv/ytv.css') ?>" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/form-validation/js/formValidation.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/form-validation/js/framework/bootstrap.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/full-width-slider/js/jssor.slider.mini.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/fotorama-slider/fotorama.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/pnotify/js/pnotify.custom.min.js') ?>"></script>
    <link href="<?php echo base_url('assets/pnotify/css/pnotify.custom.min.css') ?>" media="all" rel="stylesheet" type="text/css"/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body>




<div id="holder">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">
                    <img class="nav_logo"  height=""
                         src="<?php echo base_url('assets/img/logos/roldana_branca-01.png') ?>">
                    <a href="http://bestaveiro.web.ua.pt/" class="navbar-brand" target="_blank">

            </div>
            <div class="navbar-header clearfix pull-right">
                <a class="navbar-brand" target="_blank">
                    <img class="nav_logo_right" src="<?php echo base_url('assets/img/logos/best_aveiro_logo.png') ?>">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav hvr-sweep-to-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('index.php/frontpage/indexen')?>">EBEC Challenge Aveiro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('index.php/frontpage/applyen')?>">Apply</a>
                    </li>
<!--                    <li>-->
<!--                        <a class="page-scroll" href="--><?php //echo base_url('index.php/frontpage/faqsen')?><!--">FAQs</a>-->
<!--                    </li>-->
                    <!--                      <li>-->
                    <!--                          <a class="page-scroll" href="--><?php //echo base_url('index.php/frontpage/apply')?><!--">Inscrição</a>-->
                    <!--                      </li>-->
                    <!--                      <li>-->
                    <!--                          <a class="page-scroll" href="--><?php //echo base_url('index.php/frontpage/news')?><!--">Notícias</a>-->
                    <!--                      </li>-->

                    <!--                      <li>-->
                    <!--                        <a class="page-scroll dropdown-toggle" id="box" on onclick="myFunction()" data-toggle="dropdown" href="#" id="dropdown-ebec">Parcerias <b class="caret"></b></a>-->
                    <!--                          <ul class="dropdown-menu dropdown-menu-2">-->
                    <!--                            <li>-->
                    <!--                              <a class="page-scroll" href="--><?php //echo base_url('index.php/frontpage/partners')?><!--">Parceiros</a>-->
                    <!--                           </li>-->
                    <!--                           <li>-->
                    <!--                              <a class="page-scroll" href="--><?php //echo base_url('index.php/frontpage/querparceiro')?><!--">Quer ser nosso parceiro?</a>-->
                    <!--                           </li>-->
                    <!---->
                    <!--                          </ul>-->
                    <!--                      </li>-->
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('index.php/frontpage/querparceiroen')?>">Be our partner</a>
                    </li>
                    <script>
                        var x = document.getElementById('box');
                        x.onclick=myFunction()
                        function myFunction() {
//                              var x = document.getElementById('box');
                            if (x.style.color === 'white') {
                                x.style.color = 'orange';
                            } else {
                                x.style.color='white';
                            }
                        }

                    </script>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('index.php/frontpage/contactsen')?>">Contacts</a>
                    </li>
                </ul>

                <ul class="nav2 navbar-nav pull-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('index.php/frontpage/index')?>">PT</a>
                    </li>
                </ul>

                <!--                   /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
    </nav>
</div>
