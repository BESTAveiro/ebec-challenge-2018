
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



<br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading title_color_diego_blue">Want to be our partner?</h2>
                <br/>
            </div>
            <div class="col-md-12">
                <p>
                    By becoming our partner, your company will be integrated in the EBEC Challenge Aveiro organization,
                    counting with the support of a dynamic team, commited to satisfy the extracurricular development of
                    the students, as well as the interests of the company.
                </p>
                <p class="">
                    By being a partner of EBEC Challenge Aveiro 2018, your company will be an essential part of the
                    event. Your company will be promoted in our <b>social media</b> and on the <b>website of the event</b>, with a
                    greater reach and proximity to the University of Aveiro students and management.</p>

             </div>
            <div class="col-lg-12 text-center">
                <br>
                <a class="hvr-sweep-to-right button2-diego" id="myBtn"> Contact us &nbsp;<span class="fa fa-chevron-right"></span></a>
<!--                <button id="myBtn">Open Modal</button>-->

                <!-- The Modal -->
                <div id="myModaldiego" class="modal2">

                    <!-- Modal content -->
                    <div class="modal-content2">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h2 class="title_color_diego_blue">Form </h2>
                        </div>
                        <div class="modal-body2">
                            <div class="typeform-widget" data-url="https://diegocaldeira.typeform.com/to/WEwSm5" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=WEwSm5&utm_source=typeform.com-11468690-Basic&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>
                        </div>
                    </div>

                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('myModaldiego');

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</section>
<section id="backgroung_section_blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading title_color_diego_orange">Sponsor one of our modalities</h2>
                <br/>
            </div>
            <div class="col-md-4">
                <img class="imgsize img-responsive" src="<?php echo base_url('assets/img/querparceiro/1.jpg')?>">

            </div>

            <div class="col-md-8">
                <p>

                </p>
                <p>

                </p>
                <p class="d" style="color:#ffffff">
                    By sponsoring one of EBEC Aveiro 2018 modalities, you will have free contact with the participants
                    throughout the challenges. Your company will choose a <b style="color: orange">modality</b>, so that you can set
                    a challenge for the participants to solve, accordingly to your company interests.
                </p>
<!--                <div  class="col-md-1"></div>-->
<!--                <div  class="col-md-1">-->
<!--                    <img class="img_martelo" src="--><?php //echo base_url('assets/img/ebc_material/martelo.png')?><!--">-->
<!--                </div>-->
<!--                <div  class="col-md-1"></div>-->
<!--                <div  class="col-md-1">-->
<!--                    <img class="img_cerra" src="--><?php //echo base_url('assets/img/ebc_material/cerra.png')?><!--">-->
<!--                </div>-->
<!--                <div  class="col-md-4"></div>-->
<!--                <div  class="col-md-1">-->
<!--                    <img class="img_objeto" src="--><?php //echo base_url('assets/img/ebc_material/objeto.png')?><!--">-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <br><br>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading title_color_diego_blue">Be in our company fair</h2>
                <br/>
            </div>


            </div>
            <div class="col-md-7">
                <p>


                </p>
                <br><br><br>
                <p class="">
                    Accessible to the entire academic community, the <b>company fair</b> aims to be a tool for exhibiting and sharing
                    the company and its products and services, as well as an opportunity to recruit all interested
                    students from the University of Aveiro.

                </p>
            </div>
        <div class="col-md-5">
            <div class="fotorama" data-width="400" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48"  data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                <img src="<?php echo base_url('assets/img/media/2016/23.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/24.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/25.jpg')?>">

            </div>

        </div>
    </div>
</section>
