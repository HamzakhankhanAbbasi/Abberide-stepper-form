<?php include 'inc/header.php'; ?>


<style>


</style>




<section class="bookingSCreen">
    <div class="container">
        <h1>Booking</h1>
    </div>
</section>

<section class="paymentWrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
                <div id="pay-invoice" class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Pay Invoice</h3>
                        </div>
                        <hr>
                        <form action="/echo" method="post" novalidate="novalidate" class="needs-validation">
                            
                        
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" required autocomplete="off"  >
                                <span class="invalid-feedback">Enter a valid 12 to 16 digit card number</span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp">
                                        <span class="invalid-feedback">Enter the expiration date</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">CVV</label>
                                    <div class="input-group">
                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" required autocomplete="off">
                                        <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="CVV" 
                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                            data-trigger="hover"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="x_zip" class="control-label mb-1">Postal code</label>
                                <input id="x_zip" name="x_zip" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the ZIP/Postal code" autocomplete="postal-code">
                                <span class="help-block" data-valmsg-for="x_zip" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="x_promotion" class="control-label mb-1">Promotion Code</label>
                                <input id="x_promotion" name="x_prom" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the Promotion  code" >
                                <span class="help-block" data-valmsg-for="x_promotion" data-valmsg-replace="true"></span>
                            </div>
                            
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Pay </span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>  
</section>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>

    $(function () {
    $('[data-toggle="popover"]').popover()
    })

    $("#payment-button").click(function(e) {

        
        var form = $(this).parents('form');
        
        var cvv = $('#x_card_code').val();
        var regCVV = /^[0-9]{3,4}$/;
        var CardNo = $('#cc-number').val();
        var regCardNo = /^[0-9]{12,16}$/;
        var date = $('#cc-exp').val().split('/');
        var regMonth = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
        var regYear = /^20|21|22|23|24|25|26|27|28|29|30|31$/;
        
        if (form[0].checkValidity() === false) {
        e.preventDefault();
        e.stopPropagation();
        }
        else {
        if (!regCardNo.test(CardNo)) {
        
            $("#cc-number").addClass('required');
            $("#cc-number").focus();
            alert(" Enter a valid 12 to 16 card number");
            return false;
        }
        else if (!regCVV.test(cvv)) {
        
            $("#x_card_code").addClass('required');
            $("#x_card_code").focus();
            alert(" Enter a valid CVV");
            return false;
        }
        else if (!regMonth.test(date[0]) && !regMonth.test(date[1]) ) {
        
            $("#cc_exp").addClass('required');
            $("#cc_exp").focus();
            alert(" Enter a valid exp date");
            return false;
        }
        
        
        
        form.submit();
        }
        
        form.addClass('was-validated');
    });

</script>






<?php include 'inc/footer.php'; ?>