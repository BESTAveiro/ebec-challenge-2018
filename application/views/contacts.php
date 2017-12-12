<!-- Contacts -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop.css') ?>"/>
<script>
    $(document).ready(function(){


        $('.scrollToTop').hide();

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if($(window).scrollTop() + $(window).height() > $(document).height()-20) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

    });
</script>
<div>
    <section id="backgroung_section_orange">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-black">
                    <h2 class="section-heading-diego">Contactos</h2>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url('assets/img/ebc_material/valente.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4>João Valente</h4>
                        <p class="text-muted-diego">Coordenador da EBEC Challenge Aveiro</p>
                        <p>
                            <i class="fa fa-envelope"></i><a href="mailto:joao.valente@BEST.eu.org" > joao.valente@BEST.eu.org  </a><br/>
                            <i class="fa fa-phone"></i> <b>(+351) 910 975 876</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url('assets/img/ebc_material/miguel.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4>Miguel Oliveira</h4>
                        <p class="text-muted-diego">Presidente do BEST Aveiro</p>
                        <p>
                            <i class="fa fa-envelope"></i><a href="mailto:miguel.oliveira@BEST.eu.org"> miguel.oliveira@BEST.eu.org</a><br/>
                            <i class="fa fa-phone"></i> <b>+(351) 925 030 168</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url('assets/img/ebc_material/caneco.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4>Joana Caneco</h4>
                        <p class="text-muted-diego">Tesoureira do BEST Aveiro</p>
                        <p>
                            <i class="fa fa-envelope"></i><a href="mailto:joana.caneco@BEST.eu.org"> joana.caneco@BEST.eu.org </a><br/>
                            <i class="fa fa-phone"></i> <b>(+351) 914 417 607</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
<!--                    <img class="img_barco" src="--><?php //echo base_url('assets/img/ebc_material/barco.png')?><!--">-->
                </div>
                <div class="col-sm-2">
                    <img class="img_barco" src="<?php echo base_url('assets/img/ebc_material/barco.png')?>">
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url('assets/img/ebc_material/catarina.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4>Catarina Lopes</h4>
                        <p class="text-muted-diego">Responsável de Relações Empresariais</p>
                        <p>
                            <i class="fa fa-envelope"></i><a href="mailto:catarinavslopes5@gmail.com"> catarinavslopes5@gmail.com </a><br/>
                            <i class="fa fa-phone"></i> <b>(+351) 925 731 134</b>
                        </p>
                    </div>
                </div>

<!--                <div class="col-sm-4">-->
<!--                    <div class="team-member">-->
<!--                        <img src="--><?php //echo base_url('assets/img/team/francisca.jpg')?><!--" class="img-responsive img-circle img-contact" alt="">-->
<!--                        <h4>TBK</h4>-->
<!--                        <p class="text-muted-diego">Responsável de Participantes</p>-->
<!--                        <p>-->
<!--                            <i class="fa fa-envelope"></i><a href="mailto:franciscabraganca9@gmail.com"> TBK</a><br/>-->
<!--                            <i class="fa fa-phone"></i> <b>TBK</b>-->
<!--                        </p>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
                <div class="col-sm-2">
                    <img class="img_elephant" src="<?php echo base_url('assets/img/ebc_material/elephant.png')?>">
                </div>
            </div>

        </div>
    </section>

    <!-- BEST Aveiro -->
    <section id="backgroung_section_blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-white">
                    <h2 class="section-heading title_color_diego_orange">BEST Aveiro</h2>
                    <br/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div id="map-container" class="col-md-6"></div>
                        </div>
                    </div>
                </div>
                <div  class="col-md-1">
                    <img class="img_fox" src="<?php echo base_url('assets/img/ebc_material/fox.png')?>">
                </div>
                <div class="col-md-4 text-center team-member">
                    <h4 class="title_color_diego_orange"><i class="fa fa-home" style="color:color:#EEA225"></i> Morada</h4>
                    <p class="text-muted text-white">
                        Incubadora de Empresas da Universidade de Aveiro<br/>
                        Campus Universitário de Santiago, Edifício 1<br/>
                        3810-193 Aveiro<br/>
                        Portugal
                    </p>
                    <h4  class="title_color_diego_orange"><i class="fa fa-phone" style="color:color:#EEA225"></i> Telefone</h4>
                    <p class="text-muted text-white">
                        +351 918 570 425
                    </p>
                    <h4  class="title_color_diego_orange"><i class="fa fa-envelope" style="color:color:#EEA225"></i> Email</h4>
                    <p class="text-muted text-white">
                        <a href="mailto:aveiro@BEST.eu.org">aveiro@BEST.eu.org</a><br/>
                    </p>
                    <br/>
                    <ul class="list-inline">
                        <li>
                            <a href="http://bestaveiro.web.ua.pt/" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x" style="color:#EEA225"></i>
                                    <i class="fa fa-globe fa-stack-1x fa-inverse" style="color:#294F66"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/BESTaveiro/"target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x" style="color:#EEA225"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse" style="color:#294F66"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/best.aveiro/"target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x" style="color:#EEA225"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse" style="color:#294F66"></i>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.linkedin.com/company/best-aveiro"target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x" style="color:#EEA225"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse" style="color:#294F66"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.flickr.com/photos/bestaveiro"target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x" style="color:#EEA225"></i>
                                    <i class="fa fa-flickr fa-stack-1x fa-inverse" style="color:#294F66"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <a href="" class="scrollToTop"></a>
    <!-- Map javascript -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        function init_map() {
            var var_location = new google.maps.LatLng(40.636002,-8.6577);

            var var_mapoptions = {
                center: var_location,
                zoom: 18
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title:"BEST Aveiro"});

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var_marker.setMap(var_map);
        }

        google.maps.event.addDomListener(window, 'load', init_map);
    </script>


    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-568b1027a1f2a864" async="async"></script>




</div>


