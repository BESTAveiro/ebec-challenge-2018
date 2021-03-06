﻿<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading title_color_diego_blue">Inscrição</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h4 class="text-muted-diego text-justify text-no-transform">
                    <b>Para te inscreveres só precisas de efetuar os seguintes passos:</b>
                </h4>
                <ul class="fa-ul">
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">

                            <span class="big-number-diego">1.</span> Regista-te no site do BEST.
                            Podes fazê-lo <a target="_blank" href="https://www.best.eu.org/account/registration.jsp">aqui</a>.
                        </p>
                    </li>
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">
                            <span class="big-number-diego">2.</span> Efetua a pré-inscrição na EBEC Challenge Aveiro 2018.
                            Podes fazê-lo <a target="_blank" href="https://www.best.eu.org/event/localDetails.jsp?event=m624hj8">aqui</a>.
                        </p>
                        </p>
                    </li>
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">
                            <span class="big-number-diego">3.</span> Indica o nome da tua equipa. Todos os elementos da equipa devem indicar o mesmo nome.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <img class="img_roldana" src="<?php echo base_url('assets/img/ebc_material/roldana.png')?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="fa-ul">
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">
                            <span class="big-number-diego">4.</span> Preenche os dados pedidos. Todos os campos deverão ser preenchidos,
                            à exceção do campo "Motivation Letter", que é de preenchimento facultativo. Clica em "Apply"
                            para finalizares esta parte.
                        </p>
                    </li>
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">
                            <span class="big-number-diego">5.</span> Já tens equipa? Então terminaste a tua pré-inscrição para a EBEC
                            Challenge Aveiro 2018. Brevemente irás receber um e-mail de confirmação de inscrição com mais informação sobre o evento.
                        </p>
                    </li>
                    <br/>
                </ul>
            </div>
        </div>

<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-md-12">-->
<!--                <h2 class="pull-right title_color_diego_blue">Estamos à tua espera!</h2>-->
<!--            </div>-->

    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="regulationModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-no-transform title_color_diego_blue">Aviso</h4>
            </div>
            <div class="modal-body">
                <p>Antes de continuares lê o regulamento
                    <a class="text-muted" target="_blank" href="<?php echo base_url('assets/regulation/Regulamento.pdf')?>" style="color:#0645AD">aqui</a>.</p>
                <div class="checkbox">
                    <label><input type="checkbox" id="regulationCheck" value="">Declaro que li o regulamento e aceito as
                        condições nele referidas.</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-new" id="regulationButton" disabled><b>Continuar</b></button>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

    // Open modal
    $(document).ready(function(){
        $('#regulationCheck').attr('checked', false);
        $("#regulationButton").attr("disabled", true);
        $('#regulationModal').modal('show');
        $('a[data-toggle="tooltip"]').tooltip({
            animated: 'fade',
            placement: 'bottom',
            html: true
        });
    });

    // Checkbox logic
    $('#regulationCheck').change(function() {

        if($(this).is(":checked")) {
            $("#regulationButton").attr("disabled", false);
        } else {
            $("#regulationButton").attr("disabled", true);
        }
    });

    // Button click
    $('#regulationButton').on('click', function() {
        $('#regulationModal').modal('hide');
    });

</script>

