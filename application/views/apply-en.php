<section class="bg-white">
    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Application</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h4 class="text-muted-diego text-justify text-no-transform">
                    <b>To apply you only need to follow this steps:</b>
                </h4>
                <ul class="fa-ul">
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">

                            <span class="big-number-diego">1.</span> Sign up on BEST Website. You can do it
                            <a target="_blank" href="https://www.best.eu.org/account/registration.jsp">here</a>.
                        </p>
                    </li>
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">
                            <span class="big-number-diego">2.</span> Do a pre-registration on EBEC Aveiro 2018. You can do it
                            <a target="_blank" href="https://www.best.eu.org/event/localDetails.jsp?event=m624hj8">here</a>.
                        </p>
                        </p>
                    </li>
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">
                            <span class="big-number-diego">3.</span> Write the name of your team. All the members of the team have to write the same name.
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
                            <span class="big-number-diego">4.</span> Fill all the fields, with exception of "Motivation Letter", which it's optional. Click on "Apply" to finish this part.
                        </p>
                    </li>
                    <li class="text-muted-diego">
                        <p class="text-muted-diego text-justify">
                            <span class="big-number-diego">5.</span> Already have a team? So you finish your pre-registration to EBEC Aveiro 2018. Soon you will receive an email with confirmation of registration and more information about the event.
                        </p>
                    </li>
                    <br/>
                </ul>
            </div>
        </div>
            <div class="col-md-12">
                <h2 class="pull-right">We are waiting for you!</h2>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="regulationModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-no-transform">Warning</h4>
            </div>
            <div class="modal-body">
                <p>To proceed you have to read the regulation
                    <a class="text-muted" target="_blank" href="<?php echo base_url('assets/regulation/Regulamento.pdf')?>" style="color:#0645AD">here</a>.</p>
                <div class="checkbox">
                    <label><input type="checkbox" id="regulationCheck" value="">I have read the regulation and accept the conditions</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-new" id="regulationButton" disabled><b>Proceed</b></button>
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