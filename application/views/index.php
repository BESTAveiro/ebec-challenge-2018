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

<!--Background-->
<section class="bg-aveiro" style="height: 20cm">
    <div class="container">
        <div class="row" >

            <div class="col-md-3">
            </div>
            <div class="col-md-5">
                <img class="main-logo" style="opacity: 1" src="<?php echo base_url('assets/img/ebc_material/logo.png')?>">
            </div>
        </div>
        <div class="row">
            <h1 class="date">15, 16, 17, 18 e 21 de março</h1>
        </div>

    </div>

</section>

<!--Tab-->

<h1 class="section-heading title_color_diego_blue"><b>EBEC Challenge Aveiro 2018</b></h1>
<br>
<div class="tabs" id="backgroung_section_blue">

    <input type="radio" id="tab1" name="tab-control" checked>
    <input type="radio" id="tab2" name="tab-control">
    <input type="radio" id="tab3" name="tab-control">
    <input type="radio" id="tab4" name="tab-control">

    <!--    Mini-ícones-->
    <ul>
        <li title="">
            <label for="tab1" role="button">
                <svg viewBox="0 0 490 490">
                    <g>
                        <path d="M245.001,0C156.458,0,84.424,71.987,84.424,160.472c0,85.04,145.93,315.146,152.142,324.9
		c1.836,2.882,5.017,4.628,8.435,4.628c3.418,0,6.599-1.746,8.434-4.628c6.212-9.754,152.141-239.861,152.141-324.9
		C405.576,71.987,333.542,0,245.001,0z M245.001,461.127c-13.207-21.363-40.009-65.587-66.549-114.588
		c-48.429-89.418-74.027-153.758-74.027-186.067C104.424,83.015,167.487,20,245.001,20c77.514,0,140.575,63.015,140.575,140.472
		c0,32.309-25.599,96.649-74.027,186.067C285.009,395.539,258.207,439.764,245.001,461.127z"/>
                        <path d="M244.999,76.071c-41.884,0-75.959,33.149-75.959,73.894c0,40.744,34.075,73.891,75.959,73.891s75.959-33.147,75.959-73.891
		C320.958,109.22,286.883,76.071,244.999,76.071z M244.999,203.855c-30.855,0-55.959-24.175-55.959-53.891
		c0-29.717,25.104-53.894,55.959-53.894s55.959,24.177,55.959,53.894C300.958,179.68,275.855,203.855,244.999,203.855z"/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
                <br>
                <span>Ronda Local</span></label></li>
        <li title=""><label for="tab2" role="button"><svg viewBox="0 0 24 24">
                    <svg viewBox="0 0 415.998 415.998">
                        <path d="M367.998,95.999c0-17.673-14.326-32-31.999-32h-44.424c-5.926-6.583-13.538-11.62-22.284-14.136
			c-7.367-2.118-13.037-7.788-15.156-15.155C248.37,14.664,229.897,0,207.998,0c-21.898,0-40.37,14.663-46.134,34.706
			c-2.122,7.376-7.806,13.039-15.182,15.165c-8.736,2.518-16.341,7.55-22.262,14.128H79.999c-17.674,0-32,14.327-32,32v287.999
			c0,17.673,14.326,32,32,32c73.466,0,163.758,0,256,0c17.674,0,32-14.327,32-32C367.999,293.119,367.998,206.096,367.998,95.999z
			 M128,95.741c0.11-14.066,9.614-26.606,23.113-30.496c12.71-3.662,22.477-13.426,26.127-26.116
			C181.157,25.51,193.805,16,207.998,16c14.194,0,26.842,9.51,30.758,23.13c3.652,12.698,13.413,22.459,26.111,26.11
			c13.618,3.917,23.13,16.566,23.13,30.758v16H128V95.741z M335.999,399.998c-85.455,0-170.77,0-256,0c-8.823,0-16-7.178-16-16
			V95.999c0-8.822,7.177-16,16-16h34.742c-1.73,4.892-2.698,10.143-2.74,15.617v32.383h191.998v-32c0-5.615-0.992-10.991-2.764-16
			h34.764c8.822,0,15.999,7.178,15.999,16c0,45.743-0.001,260.254,0.002,287.999C351.999,392.82,344.822,399.998,335.999,399.998z"
                        />
                        <circle cx="208.239" cy="48" r="12"/>
                        <g>
                            <rect x="159.999" y="176" width="144" height="16"/>
                        </g>
                        </g>
                        <g>
                            <g>
                                <rect x="159.999" y="224" width="144" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="159.999" y="272" width="144" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="159.999" y="320" width="144" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="119.999" cy="184" r="8"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="119.999" cy="232" r="8"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="119.999" cy="280" r="8"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="119.999" cy="328" r="8"/>
                            </g>
                    </svg>
                    <br>
                    <span>Programa</span></label></li>
        <li title=""><label for="tab3" role="button"><svg viewBox="0 0 481.763 481.763">
                    <path d="M453.584,405.715L298.332,250.457c-1.454-1.46-3.009-2.755-4.61-3.967l27.497-28.954c1.406-1.416,2.736-2.905,3.96-4.436
		c36.505,13.77,79.34,6.029,108.682-23.309c21.402-21.409,32.195-51.013,29.583-81.226c-0.283-3.419-2.548-6.375-5.769-7.542
		c-3.228-1.179-6.845-0.375-9.274,2.045l-49.757,49.754l-50.377-12.699l-14.287-51.967l49.745-49.748
		c2.441-2.433,3.239-6.053,2.063-9.277c-1.171-3.233-4.126-5.479-7.555-5.78c-30.21-2.604-59.816,8.183-81.226,29.592
		c-29.317,29.317-37.078,72.129-23.323,108.619c-1.496,1.265-2.985,2.61-4.445,4.049l-40.471,38.869l-74.319-74.312
		c-0.928-0.931-1.918-1.75-2.938-2.519c0.872-1.53,1.72-3.105,2.512-4.74c15.696,3.021,44.39-27.544,68.76-51.905L151.787,0
		c-31.747,31.752-54.929,53.061-51.92,68.757c-7.258,3.546-13.728,7.882-18.326,12.486l-10.001,9.998
		c-6.493,6.502-10.409,14.588-11.807,23.014c-0.97,1.108-1.957,2.275-2.938,3.523l-3.727,4.684
		c-0.104,0.115-0.425,0.576-0.514,0.694l-3.378,4.729c-2.113,2.819-3.96,5.881-5.746,8.836c-0.659,1.097-1.33,2.196-2.015,3.292
		c-0.109,0.189-0.216,0.375-0.313,0.562l-1.501,2.828c-1.814,3.402-3.697,6.924-5.308,10.799l-0.26,0.617
		c-1.9,4.513-3.869,9.186-5.243,14.139l-0.665,2.143c-0.544,1.762-1.097,3.52-1.605,5.621l-1.38,6.833
		c-1.029,4.273-1.375,8.488-1.676,12.221l-0.201,2.453c-0.508,3.871-0.36,7.521-0.222,10.742c0.047,1.079,0.089,2.137,0.121,3.564
		c0.036,0.594,0.042,1.173,0.06,1.744c0.035,1.439,0.074,3.074,0.352,4.793l0.866,5.545c0.186,1.072,0.343,2.113,0.491,3.111
		c0.331,2.252,0.671,4.581,1.342,6.792l3.632,12.602c1.12,3.83,4.758,6.366,8.739,6.088c2.107-0.147,4.001-1.058,5.411-2.471
		c1.259-1.259,2.131-2.914,2.397-4.781l1.883-12.812c0.139-1.017,0.576-2.506,1.028-4.082c0.322-1.093,0.635-2.208,0.877-3.159
		l1.339-4.782c0.163-0.647,0.479-1.277,0.757-1.924c0.266-0.6,0.532-1.218,0.769-1.827c0.449-1.017,0.872-2.033,1.288-3.076
		c0.825-2.045,1.605-3.969,2.796-5.858c0.518-0.872,0.999-1.738,1.49-2.622c1.241-2.222,2.42-4.32,3.821-6.059
		c0.088-0.103,0.168-0.218,0.26-0.34l3.159-4.356c0.647-0.819,1.374-1.593,2.081-2.373c0.502-0.55,1.005-1.103,1.64-1.83
		c1.865-2.243,4.055-4.199,6.168-6.124l1.132-1.017c1.566-1.454,3.378-2.822,5.284-4.268c0.78-0.583,1.543-1.162,2.293-1.732
		c0.963-0.624,1.895-1.247,2.813-1.865c1.72-1.162,3.209-2.167,4.93-3.062l3.745-2.131l3.789-1.858
		c1.321-0.683,2.622-1.209,3.821-1.693c0.712-0.296,1.416-0.583,2.069-0.866c0.665-0.23,1.306-0.479,1.912-0.703
		c0.812-0.296,1.513-0.58,2.465-0.828l1.022-0.23c1.114,1.803,2.42,3.517,3.987,5.083l73.515,73.518L31.647,393.822
		c-0.062,0.059-0.121,0.124-0.178,0.178c-19.529,19.529-22.709,48.131-3.177,67.666c19.532,19.529,46.316,14.522,65.84-5
		c0.086-0.083,0.16-0.16,0.236-0.249l138.448-145.782c0.812,0.957,1.616,1.92,2.518,2.824l155.24,155.253
		c17.396,17.401,45.613,17.401,63.009,0C470.974,451.322,470.974,423.104,453.584,405.715z M73.871,440.564
		c-7.191,7.199-18.855,7.199-26.052,0c-7.19-7.193-7.19-18.85,0-26.043c7.19-7.188,18.855-7.193,26.052,0
		C81.055,421.715,81.055,433.371,73.871,440.564z"/>
                </svg>
                <br>

                <span>Modalidades</span></label></li>    <li title=""><label for="tab4" role="button"><svg viewBox="0 0 511.999 511.999">
                    <path d="M327.941,121.658c-1.395-4.288-5.103-7.414-9.566-8.064l-35.758-5.196l-15.991-32.402
			c-1.997-4.044-6.116-6.605-10.626-6.605c-4.511,0-8.63,2.561-10.626,6.605l-15.991,32.402l-35.758,5.196
			c-4.464,0.648-8.172,3.775-9.566,8.065c-1.393,4.291-0.231,8.999,2.999,12.148l25.875,25.221l-6.109,35.613
			c-0.763,4.446,1.064,8.938,4.714,11.59c3.648,2.651,8.487,3,12.479,0.902L256,190.32l31.982,16.813
			c1.734,0.911,3.627,1.36,5.512,1.36c2.456,0,4.902-0.763,6.966-2.263c3.65-2.652,5.477-7.144,4.714-11.59l-6.109-35.613
			l25.875-25.221C328.172,130.658,329.334,125.949,327.941,121.658z M278.064,146.405c-2.793,2.722-4.068,6.644-3.408,10.489
			l3.102,18.09l-16.245-8.541c-1.725-0.908-3.62-1.36-5.514-1.36c-1.894,0-3.788,0.454-5.514,1.36l-16.245,8.541l3.102-18.09
			c0.66-3.844-0.615-7.766-3.408-10.489l-13.141-12.81l18.162-2.64c3.859-0.56,7.196-2.985,8.922-6.482l8.123-16.458l8.122,16.458
			c1.727,3.497,5.062,5.921,8.922,6.482l18.162,2.64L278.064,146.405z"/>
                    <path d="M466.45,49.374c-7.065-8.308-17.368-13.071-28.267-13.071H402.41v-11.19C402.41,11.266,391.143,0,377.297,0H134.705
			c-13.848,0-25.112,11.266-25.112,25.112v11.19H73.816c-10.899,0-21.203,4.764-28.267,13.071
			c-6.992,8.221-10.014,19.019-8.289,29.624c9.4,57.8,45.775,108.863,97.4,136.872c4.717,11.341,10.059,22.083,16.008,32.091
			c19.002,31.975,42.625,54.073,68.627,64.76c2.635,26.644-15.094,51.885-41.794,57.9c-0.057,0.013-0.097,0.033-0.153,0.046
			c-5.211,1.245-9.09,5.921-9.09,11.513v54.363h-21.986c-19.602,0-35.549,15.947-35.549,35.549v28.058
			c0,6.545,5.305,11.85,11.85,11.85H390.56c6.545,0,11.85-5.305,11.85-11.85v-28.058c0-19.602-15.947-35.549-35.549-35.549h-21.988
			V382.18c0-5.603-3.893-10.286-9.118-11.52c-0.049-0.012-0.096-0.028-0.145-0.04c-26.902-6.055-44.664-31.55-41.752-58.394
			c25.548-10.86,48.757-32.761,67.479-64.264c5.949-10.009,11.29-20.752,16.008-32.095c51.622-28.01,87.995-79.072,97.395-136.87
			C476.465,68.392,473.443,57.595,466.45,49.374z M60.652,75.192c-0.616-3.787,0.431-7.504,2.949-10.466
			c2.555-3.004,6.277-4.726,10.214-4.726h35.777v21.802c0,34.186,4.363,67.3,12.632,97.583
			C89.728,153.706,67.354,116.403,60.652,75.192z M366.861,460.243c6.534,0,11.85,5.316,11.85,11.85v16.208H134.422v-16.208
			c0-6.534,5.316-11.85,11.85-11.85H366.861z M321.173,394.03v42.513H191.96V394.03H321.173z M223.037,370.331
			c2.929-3.224,5.607-6.719,8.002-10.46c7.897-12.339,12.042-26.357,12.228-40.674c4.209,0.573,8.457,0.88,12.741,0.88
			c4.661,0,9.279-0.358,13.852-1.036c0.27,19.239,7.758,37.45,20.349,51.289H223.037z M378.709,81.803
			c0,58.379-13.406,113.089-37.747,154.049c-23.192,39.03-53.364,60.525-84.956,60.525c-31.597,0-61.771-21.494-84.966-60.523
			c-24.342-40.961-37.748-95.671-37.748-154.049V25.112c0-0.78,0.634-1.413,1.412-1.413h242.591c0.78,0,1.414,0.634,1.414,1.413
			V81.803z M451.348,75.192c-6.702,41.208-29.074,78.51-61.569,104.191c8.268-30.283,12.631-63.395,12.631-97.58V60.001h35.773
			c3.938,0,7.66,1.723,10.214,4.726C450.915,67.688,451.963,71.405,451.348,75.192z"/>
                </svg><br><span>Final Nacional</span></label></li>
    </ul>

    <div class="slider">
        <div class="indicator">

        </div>
    </div>

    </section>
    <div class="content">

        <!-- EBEC Aveiro -->
        <section id="backgroung_section_blue">
<!--            <div class="container" style="height: 400px;">-->

                <div class="row" style="height: 320px;">
                    <div class="col-md-5">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/event/ebec_aveiro_2015.png')?>">
                    </div>
                    <div class="col-md-7">
                        <p class="text-justify text-white">
                            O BEST Aveiro  tem o prazer de apresentar a EBEC Challenge Aveiro 2018, uma das 80 fases
                            locais do projeto EBEC, com a duração de 24 horas.
                        </p>
                        <p class="text-muted text-justify text-white">
                            A ocorrer em março de 2018, o evento contará com 104 vagas para as quais te podes inscrever
                            - 52 para Case Study e 52 para Team Design. Se não sabes o que são estas variantes,
                            acede ao separador <i>Modalidades</i> para uma descrição mais detalhada (podes
                            também encontrar <a href="<?php echo base_url('index.php/frontpage/faqs')?>" style="color: orange"> aqui</a> uma
                            lista de <i>FAQs</i> sobre o evento).
                        </p>
                        <p class="text-justify text-white">
                            Considerado um dos eventos de maior destaque do BEST Aveiro,
                            direcionado aos alunos da Universidade de Aveiro, a EBEC Challenge Aveiro pretende ser um momento onde
                            criatividade, desafio, energia, flexibilidade e espírito de equipa são postos em prática.
                        </p>
                        <p class="text-muted text-justify text-white">
                            No sentido de promover uma melhor relação entre estudantes e empresas, a organização da EBEC Challenge
                            Aveiro promoverá, à parte da competição, uma feira de empresas seguida de uma cocktail
                            network, no dia 15 de março.

                        </p>
<br>
                        <div class="col-lg-12 text-center">
                            <br>
                            <a class="hvr-sweep-to-right button2-dinis" href="<?php echo base_url('index.php/frontpage/apply')?>" > Inscreve-te já!  <span class="fa fa-chevron-right"></span></a>
                            <!--                <button id="myBtn">Open Modal</button>-->

                            <!-- The Modal -->
                            <div id="myModaldiego" class="modal2">

                                <!-- Modal content -->
                                <div class="modal-content2">
                                    <div class="modal-header">
                                        <span class="close">&times;</span>
                                        <h2 class="title_color_diego_blue">Formulário</h2>
                                    </div>
                                    <div class="modal-body2">
                                        <div class="typeform-widget" data-url="https://diegocaldeira.typeform.com/to/ItnXRb" style="width: 100%; height: 500px;" > </div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;" > powered by <a href="https://www.typeform.com//?utm_campaign=ItnXRb&amp;utm_source=typeform.com-11467697-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>
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
<!--                        <p class="text-justify textsize " style="color: #EEA225">-->
<!--                            <a href="--><?php //echo base_url('index.php/frontpage/apply')?><!--" style="color: #EEA225">-->
<!--                                <b>Inscreve-te já!</b>-->
<!--                            </a>-->
<!--                        </p>-->
                    </div>
                </div>
<!--            </div>-->
        </section>


        <!--Programa-->
        <section id="backgroung_section_blue" >
            <div class="row" style="height: 400px;">
                <h2 class="section-heading">Programa</h2>
                <img class="img_schedule img-responsive img-center" src="<?php echo base_url('assets/img/Schedule/Schedule.png')?>">
            </div>
        </section>


        <!-- Modalidades -->
        <section id="backgroung_section_blue">
            <div class="row" style="height:150px">
                <div class="col-md-12 text-center box-diego">
                    <h2 class="section-heading" id="Modalidades">Modalidades</h2>
                    <div class="col-md-6">
                        <div style="height:300px">
                            <h3 class="title_color_diego_orange text-center">
                                Case Study
                            </h3>
                            <p class="text-muted text-justify" style="color:#FFFFFF">
                                Os participantes terão a oportunidade de resolver dois casos de estudo fornecidos por
                                empresas, que  deverão consistir num problema que poderá advir da necessidade da empresa
                                em inovar ou otimizar processos. Cada um dos casos de estudo deverá estar preparado
                                para corresponder a 12 horas de prova, sendo entregue aos participantes no início da competição.
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div style="height:300px">
                            <h3 class="title_color_diego_orange text-center">
                                Team Design
                            </h3>
                            <p class="text-muted text-justify "style="color:#FFFFFF">
                                Os participantes terão a oportunidade de construir um protótipo que solucione um desafio,
                                colocado por uma empresa, com acesso a recursos limitados. Os protótipos serão posteriormente
                                avaliados por um júri com base em parâmetros previamente definidos pela organização.

                            </p>
                        </div>
                    </div>

                    <br/>

                </div>
            </div>
            <br/>
<!--            <div class="row">-->
<!--                <div class="col-lg-12 text-center">-->
<!--                    <a href="--><?php //echo base_url('assets/regulation/Regulamento.pdf')?><!--" target="_blank">Consulta o regulamento para mais informações</a>-->
<!--                </div>-->
<!--            </div>-->
        </section>


        <!-- EBEC Portugal -->
        <section class="bg-white">
<!--            <div class="container-fluid">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12 text-center text-white">-->
<!--                        <h2 class="section-heading">EBEC Portugal</h2>-->
<!--                        <br/>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="row" style="height:110px;">
                    <div class="col-md-4" >
                        <img class="img-ebec-final" src="<?php echo base_url('assets/img/ebc_material/EBEC_Challenge_National.png')?>" style="padding-bottom:30px;">
                    </div>
                    <div class="col-md-8">
                        <p class="text-muted text-justify text-white">
                            <b>A EBEC Challenge Portugal é a final nacional da competição de Engenharia do BEST.</b>
                        </p>
                        <p class="text-muted text-justify text-white">
                            A EBEC Challenge Portugal é uma final Nacional organizada por
                            5 Grupos Locais do BEST de norte a sul do país.
                        </p>
                        <p class="text-muted text-justify text-white">
                            Na fase Nacional irão competir os vencedores das diferentes competições locais, de 5 Universidades
                            Portuguesas.
                        </p>
                        <p class="text-muted text-justify text-white">
                            Para mais informações visita o <a href="http://ebecportugal.pt/"style="color: orange "target="_blank">site</a>.
                        </p>


                    </div>
                </div>
<!--            </div>-->
        </section>
    </div>
</div>



<!-- Feira de Empresas -->
<section id="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <h2 class="section-heading title_color_diego_blue">Feira de Empresas</h2>
                <br/>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive" src="<?php echo base_url('assets/img/job-fair/job-fair.png')?>" style="">
                </div>
                <div class="col-md-8">

                    <p class="text-muted text-justify e" style="color: #000000;">
                        Englobada na EBEC Challenge Aveiro 2018 realizar-se-á uma Feira de Empresas no dia <b style="color: #294F66">15 de março</b> na <b style="color: #294F66">Universidade de Aveiro</b> destinada a todo o público académico.
                    </p>
                    <p class="text-muted text-justify e" style="color: #000000;">
                        Será um espaço onde irão marcar presença empresas de diversos setores e permitirá aproximar o tecido
                        empresarial à comunidade académica. Os estudantes terão a oportunidade de conhecer a atividade das
                        entidades presentes, interagir com elas e haverá ainda um espaço dedicado a entrevistas por parte
                        das empresas presentes.
                    </p>
                    <br>
                    <p>
                        Uma das empresas presentes será o <b>Grupo Voltalia</b>.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p class="center"><b></b></p>
                <div class="col-md-2">

                </div>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/ErQsycVS3js" allowfullscreen="" frameborder="0" width="100px" height="300px"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>

<!-- BTD -->
<section id="backgroung_section_blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-heading title_color_diego_orange">BEST Training Day</h2>
                <br/>
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-md-8">
                <p class="text-muted text-justify text-white">
                    O BEST Aveiro volta a organizar mais uma edição dos <b style="color: orange">BEST Training Days</b>, desta vez inserido
                    nas atividades da EBEC Challenge Aveiro, onde terás a oportunidade de desenvolver as tuas capacidades numa
                    formação.
                <p class="text-muted text-justify text-white">
                    A formação decorrerá durante a tarde do dia <b style="color: orange">16 de março</b> e é restrita aos participantes.
                </p>
                <p class="text-muted text-justify text-white">
                    Todos os participantes do <b style="color: orange">BEST Training Day</b> receberão um certificado de participação na formação.
                </p>
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-center" src="<?php echo base_url('assets/img/btd/btd.png')?>">
            </div>
        </div>
        <br>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading title_color_diego_blue">Júris</h2>
                <h4 class="section-subheading text-muted">Quem vai avaliar a tua prova</h4>
                <br>
            </div>
            <div>
                <p>
                    No fim de concluíres as tuas provas, elas seguirão para as mãos de júris especializados.
                </p>
                <p>
                    Podes consultar
                    <a class="text-muted" target="_blank" href="<?php echo base_url('assets/juris/Juris.pdf')?>" style="color:#0645AD">aqui</a>
                    informação sobre as pessoas que te vão avaliar.
                </p>
            </div>
        </div>
    </div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading title_color_diego_blue">Testemunhos</h2>
                <h3 class="section-subheading text-muted">Professores e Participantes</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container" style="width:1300px">
        <div class="row">
            <div class='col-md-offset-1 col-md-10' style="margin-top: -50px;">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                        <li data-target="#quote-carousel" data-slide-to="3"></li>
                        <li data-target="#quote-carousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">

                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo base_url('assets/img/testimonials/1.jpg')?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-justify">Após ter sido participante da EBEC Aveiro 2016, surgiu a
                                            oportunidade de ser Coordenador da EBEC Aveiro 2017. Desde então, passaram-se 6
                                            meses em que todos os dias eram diferentes. Era necessário organizar-me diariamente,
                                            para conseguir conciliar os estudos e o trabalho que tinha para a EBEC Aveiro,
                                            sem nunca perder a motivação para nenhum destes aspetos.<br>
                                            Nesta edição, contámos com a presença de um Main Sponsor do evento - a Mahle;
                                            reformulamos a modalidade de Case Study - fizemos 2 provas em 24h; mantivemos a
                                            existência de um workshop e de uma feira de empresas, desta vez com um espaço de
                                            Cocktail Network. A experiência tornou-se assim enriquecedora - criar e coordenar
                                            uma equipa, manter todos motivados, encontrar e resolver problemas que apareciam
                                            todas as semanas - pode parecer duro (e é) mas, na verdade, hoje sou facilmente
                                            capaz de dizer que valeu a pena por todas as aprendizagens que eu e a minha
                                            equipa trouxemos para nós, como estudantes, como futuros trabalhadores e também
                                            como pessoas. <br>
                                            Por último, gostaria de deixar um apelo a todos: explorem áreas de conhecimento que
                                            não conhecem, saiam da vossa zona de conforto e agarrem as oportunidades que aparecem."
                                        </p>
                                        <small class="text-muted">
                                            Pedro Reis<br/>
                                            Coordenador da EBEC Aveiro 2017<br/>
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo base_url('assets/img/testimonials/2.jpg')?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-justify">
                                            Participar pela primeira vez na EBEC foi mais do que aceitar um desafio, foi
                                            abraçar novos métodos de pensamento. A ideia era participar em algo que testasse
                                            a nossa capacidade para resolver um problema em equipa.<br>

                                            O mais engraçado foi como a nossa ideia desta aventura mudou, de antes para depois!
                                            Sabíamos mais ou menos como o desafio iria decorrer, mas foi muito melhor do que
                                            estávamos à espera, foram dias bastante cansativos e trabalhosos, mas também nos
                                            divertimos à brava, cada etapa concluída do nosso projeto deixava sorrisos nas nossas caras, cada
                                            coffee break com a equipa dava uns belos minutos de descontração para falarmos
                                            não entre nós (como equipa) como também para os nossos colegas contra quem
                                            estávamos a competir (foi sempre uma competição muito amigável)! <br>
                                            Deixo os meus grandes parabéns à equipa que desenvolveu esta grande aventura que ficará sempre
                                            gravada nas nossas memórias. Não houve praticamente falhas nenhumas na organização
                                            do evento! Foi dos melhores projetos em que eu alguma vez aceitei participar!"
                                        </p>
                                        <small class="text-muted">
                                            Pedro Rocha<br/>
                                            Vencedor da EBEC Aveiro 2017<br/>
                                            Modalidade: Team Design
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>


                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo base_url('assets/img/testimonials/3.jpg')?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-justify">
                                            Da minha experiência da EBEC do ano passado só tenho a dizer aspetos positivos,
                                            a logística do evento é muito interessante e desafiadora, obrigando-nos a aprender
                                            sobre um determinado tema em pouco tempo, o que nos faz desenvolver como alunos e futuros engenheiros.
                                            <br>
                                            Para concluir, a EBEC é um excelente concurso para quem gosta de desafios e para por em prática o que vamos aprendendo.
                                            <br>
                                            Para concluir, a EBEC é um excelente concurso para quem gosta de desafios e para por em prática o que vamos aprendendo."

                                        </p>
                                        <small class="text-muted">
                                            Pedro Rolo<br/>
                                            Vencedor da EBEC Aveiro 2017<br/>
                                            Modalidade: Case Study
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <!-- Quote 4 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo base_url('assets/img/testimonials/5.jpg')?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-justify">
                                            Participar como júri da prova “Team Design” da EBEC Portugal 2015 foi um verdadeiro prazer. Como
                                            docente do curso de Engenharia Física da Universidade de Aveiro fico sempre muito satisfeito
                                            quando vejo jovens a trabalhar em equipa para solucionarem problemas de engenharia. E que
                                            problemas… A prova permitiu-lhes colocar em prática os conhecimentos previamente adquiridos
                                            durante a sua formação académica, num ambiente proporcionador de um verdadeiro espírito de equipa
                                            focado na resolução de problemas, tal como irão encontrar na sua futura carreira profissional. As
                                            soluções apresentadas, estudadas e concretizadas “non-stop” em contra relógio e com recursos
                                            limitados, demonstraram as capacidades de raciocínio, técnica e de invenção dos concorrentes,
                                            tanto individualmente como em equipa. Parabéns EBEC Challenge Aveiro e venha a próxima, pois eventos como
                                            este são essenciais para o fortalecimento do futuro tecido empresarial inovador do país."
                                        </p>
                                        <small class="text-muted">
                                            Professor Luís Rino<br/>
                                            Departamento de Física<br/>
                                            Universidade de Aveiro
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <!-- Quote 5 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo base_url('assets/img/testimonials/4.jpg')?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-justify">
                                            Na Universidade de Aveiro, as atividades do BEST Aveiro, nomeadamente no contexto
                                            das competições EBEC, têm sido claros exemplos de sucesso. Por um lado, mobilizam
                                            um número considerável de pessoas, entre participantes, colaboradores diversos e
                                            assistência. Por outro lado, apresentam-se como excelentes iniciativas no âmbito
                                            de ciências, tecnologia e engenharia. Os desafios propostos promovem um evidente
                                            crescimento dos envolvidos, em questões tão diversas quanto a aplicação prática
                                            de conhecimentos científicos ou a imaginação e criatividade exigidos.
                                            <br/>
                                            Os participantes beneficiam ainda das exigências de um trabalho de equipa com
                                            objetivos bem definidos e um prazo muito apertado, assim como de um contacto
                                            direto com representantes de empresas e instituições de relevo.
                                            <br/>
                                            Este é, aliás, um dos marcadores essenciais do mérito desta organização, sempre
                                            apoiada por diversas entidades que constatam o dinamismo e a qualidade do BEST
                                            Aveiro."
                                        </p>
                                        <small class="text-muted">
                                            Professor João Oliveira<br/>
                                            Departamento de Engenharia Mecânica<br/>
                                            Universidade de Aveiro
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section id="backgroung_section_blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading title_color_diego_orange">Equipa</h2>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member2">
                        <img src="<?php echo base_url('assets/img/team/Valente.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4 style="color: orange">João Valente</h4>
                        <p class="text-muted" style="color: white">Coordenador da EBEC Challenge Aveiro</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member2">
                        <img src="<?php echo base_url('assets/img/team/Rafa.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4 style="color: orange">Rafaela Reis</h4>
                        <p class="text-muted "style="color: white">Responsável de Tópico</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member2">
                        <img src="<?php echo base_url('assets/img/team/Catarina.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4 style="color: orange">Catarina Lopes</h4>
                        <p class="text-muted"style="color: white">Responsável de Relações Empresariais</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member2">
                        <img src="<?php echo base_url('assets/img/team/Vasconcelos.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4 style="color: orange">Ana Vasconcelos</h4>
                        <p class="text-muted" style="color: white">Responsável de Marketing</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="team-member2">
                        <img src="<?php echo base_url('assets/img/team/Dinis.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4 style="color: orange">Dinis Bruno</h4>
                        <p class="text-muted "style="color: white">Responsável de Tecnologias de Informação</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member2">
                        <img src="<?php echo base_url('assets/img/team/David.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4 style="color: orange">Maria Inês David</h4>
                        <p class="text-muted" style="color: white">Responsável de Participantes</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="team-member2">
                        <img src="<?php echo base_url('assets/img/team/Rita.jpg')?>" class="img-responsive img-circle img-contact" alt="">
                        <h4 style="color: orange">Ana Rita Oliveira</h4>
                        <p class="text-muted" style="color: white">Responsável de Logística</p>
                    </div>
                </div>
            </div>

        </div>
</section>
<!--<a href="" class="scrollToTop"></a>-->
<!--<!-- Quote carousel -->
<!--<script type="text/javascript">-->
<!--    // When the DOM is ready, run this function-->
<!--    $(document).ready(function() {-->
<!--        //Set the carousel options-->
<!--        $('#quote-carousel').carousel({-->
<!--            pause: true,-->
<!--            interval: 31000, // 30 seconds-->
<!--        });-->
<!--    });</script>-->
<!---->
<!--<a href="" class="scrollToTop"></a>-->
<!---->
<!---->
