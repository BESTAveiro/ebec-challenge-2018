<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop.css') ?>"/>
<script>
    $(document).ready(function(){


        $('.scrollToTop').hide();

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            console.log((window.innerHeight - $(this).scrollTop())/window.innerHeight);
            if($(window).scrollTop() + $(window).height() == $(document).height()) {
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

<a href="" class="scrollToTop"></a>

<!--<section class="bg-white">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 text-center">-->
<!--                <h2 class="section-heading">Main Sponsor</h2>-->
<!--                <br/>-->
<!--            </div>-->
<!--            <br/><br/><br/><br/><br/>-->
<!--            <div class="row vertical-align">-->
<!--                <div class="col-lg-12">-->
<!--                    <a href="http://www.mahle.com/mahle/en/index.jsp" target="_blank">-->
<!--                        <img class="img-responsive img-center" src="--><?php //echo base_url('assets/img/partners/ebec/main_sponsor/Mahle.jpg')?><!--" style="">-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<div>-->
<!--    <img class="img-responsive img-center" src="--><?php //echo base_url('assets/img/partners/ebec/linha.jpg')?><!--" style="">-->
<!--</div>-->

<!-- Partners -->
<section class="">
    <div class="container">
        <div class="row">
            <br>
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Gold Partners</h2>
                <br/>
            </div>
            <br/><br/><br/><br/><br/>

            <div class="row vertical-align">
                <div class="col-lg-12 text-center">
                    <a href="http://voltalia.com/pt" target="_blank">
                        <img class="img-center" style="max-height:120px" src="<?php echo base_url('assets/img/partners/ebec/gold/voltalia.png')?>" style="">
                    </a>
                </div>

            </div>
            <br><br><br>
            <div>
                <img class="img-responsive img-center" src="<?php echo base_url('assets/img/partners/ebec/linha.png')?>" style="">
            </div>
            <br><br>
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Silver Partners</h2>
                <br/>
            </div>
            <br/><br/><br/><br/><br/>
            <br/><br/>
            <div class="row vertical-align">
                <div class="col-md-3">
                </div>

            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-3">
                <a href="http://www.btl.pt/" target="_blank">
                    <img class="img-responsive img-center" style="max-height:120px" src="<?php echo base_url('assets/img/partners/ebec/silver/btl.png')?>" >
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://www.inova-ria.pt/" target="_blank">
                    <img class="img-responsive img-center" style="max-height:190px" src="<?php echo base_url('assets/img/partners/ebec/silver/geniuslogo.png')?>" >
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://www.alticelabs.com/pt/index.html" target="_blank">
                    <img class="img-responsive img-center" style="max-height:190px" src="<?php echo base_url('assets/img/partners/ebec/silver/alticelabs.png')?>">
                </a>
            </div>
        </div>
        <br><br><br>
        <div>
            <img class="img-responsive img-center" src="<?php echo base_url('assets/img/partners/ebec/linha.png')?>" style="">
        </div>
        <br><br><br>

        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Promo Partners</h2>
            <br/>
        </div>
        <br/><br/><br/><br/><br/>


        <div class="row vertical-align">
            <div class="col-md-1">

            </div>
            <div class="col-md-2">
                <img class="img-center" style="max-height: 45px" src="<?php echo base_url('assets/img/partners/ebec/promo/bocadolobo.png')?>" style="">
            </div>
            <div class="col-md-2">
                <a href="https://www.tugabox.pt/?lang=pt-pt" target="_blank">
                    <img class="img-cente center-img" style="max-height:120px" src="<?php echo base_url('assets/img/partners/ebec/promo/tugabox.png')?>" style="">
                </a>
            </div>
            <div class="col-md-2">
                <a href="http://canyouescape.pt/pt/index.php/pt/homepage/" target="_blank">
                    <img class="img-center" style="max-height:120px" src="<?php echo base_url('assets/img/partners/ebec/promo/CanYouEscape.png')?>" style="">
                </a>
            </div>
            <div class="col-md-2">
                <a href="https://www.facebook.com/Mirtiflor-745004355521875/" target="_blank">
                    <img class="img-center" style="max-height:120px" src="<?php echo base_url('assets/img/partners/ebec/promo/mirtiflor.png')?>" style="">
                </a>
            </div>

        </div>
        <br><br><br>
        <!--        <div>-->
        <!--            <img class="img-responsive img-center" src="--><?php //echo base_url('assets/img/partners/ebec/linha.png')?><!--" style="">-->
        <!--        </div>-->
        <br><br>


        <!--            segunda linha
-->

        <!--            <div class="row vertical-align">-->
        <!--            <div class="col-md-3 top1">-->
        <!--                <a href="http://www.vieiradecastro.pt/" target="_blank">-->
        <!--                    <img class="img-responsive img-center"-->
        <!--                         style="max-height:150px" src="--><?php //echo base_url('assets/img/partners/ebec/base/vieira.jpg')?><!--" style="">-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="col-md-3 top1">-->
        <!--                <a href="http://www.paladin.pt/pt-pt" target="_blank">-->
        <!--                    <img class="img-responsive img-center"-->
        <!--                         style="max-height:150px" src="--><?php //echo base_url('assets/img/partners/ebec/base/paladin.png')?><!--" style="">-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="col-md-3 top1">-->
        <!--                <a href="http://canyouescape.pt/pt/index.php/pt/homepage/" target="_blank">-->
        <!--                    <img class="img-responsive img-center"-->
        <!--                         style="max-height:150px" src="--><?php //echo base_url('assets/img/partners/ebec/base/CanYouEscape.png')?><!--" style="">-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="col-md-3 top1">-->
        <!--                <a href="http://www.jpm.pt/" target="_blank">-->
        <!--                    <img class="img-responsive img-center" height="100px"-->
        <!--                         style="max-height:100px" src="--><?php //echo base_url('assets/img/partners/ebec/base/JPM.jpg')?><!--" style="">-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            </div>-->
    </div>

</section>

</section>