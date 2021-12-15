<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Abbe Rides</title>
  <link rel="icon" href="./assets/images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/aos.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  
</head>

<body>

<div class="navigation-wrap start-header start-style">
	<div class="container">
		<div class="row">
			<div class="col-12">
			    <div class="text-center w-100">
			        <a class="w-100" href="#" target="_blank"><img src="assets/images/logo-img.png" alt="logo"></a>
			    </div>		
			</div>
		</div>
	</div>
</div>



<style>
    .pay-terminal{
        padding: 70px 0;
    }
    .card-select{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .form-sec-head{
        font-size: 30px;
        font-weight: 600;
        margin: 10px 0;
    }
    .input-label{
        font-weight: 500;
        font-size: 18px;
        color: #201f1f;
        display: block;
        line-height: 1;
        margin-bottom: 10px;
    }
    .agree-text{
        padding-top: 35px;
        text-align: center;
    }
    .agree-text label{
        font-size: 18px;
        font-weight: 500;
    }
    .agree-text input{
        transform: scale(1.2);
    }
    .submit-form{
        height: 50px;
        width: 100%;
        text-align: center;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: -moz-linear-gradient( 90deg, rgb(10,139,249) 0%, rgb(0,38,196) 100%);
        background-image: -webkit-linear-gradient(90deg, rgb(203 31 38) 0%, rgb(77 8 11) 100%);
        background-image: -ms-linear-gradient( 90deg, rgb(10,139,249) 0%, rgb(0,38,196) 100%);
        border-radius: 10px;
        border: none;
        outline: none;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 600;
    }
    textarea {
        resize: none;
    }
</style>



<!-- Banner -->
<!--<section class="bookingSCreen">-->
<!--    <div class="container">-->
<!--        <h1>Checkout Terminal</h1>-->
<!--    </div>-->
<!--</section>	-->

<section class="pay-terminal">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-12 col-md-10 col-lg-10">
                <form action="">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <p class="form-sec-head">Payment Information</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4" class="input-label">Description</label>
                          <input type="text" class="form-control" readonly value="Abbe Rides Deployment Final Installment">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4" class="input-label">Amount: USD</label>
                          <input type="text" class="form-control" readonly value="$ 1250">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <p class="form-sec-head">Billing Information</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="input-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="input-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="input-label">Address</label>
                            <input type="text" class="form-control" placeholder="Enter Your Address">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4" class="input-label">City</label>
                            <input type="text" class="form-control" placeholder="Enter City">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState" class="input-label">Country</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputProvince" class="input-label">Country</label>
                            <select id="inputProvince" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPostal" class="input-label">Country</label>
                            <select id="inputPostal" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4" class="input-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <p class="form-sec-head">Credit Card Information</p>
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="col-12 col-md-6 col-lg-6">
        					<div class="form-group radio-group card-select">
        						<label class="d-block w-100 input-label">I Have</label>
        						<div>
        							<input name="cctype" value="V" type="radio" id="visa">
        							<label for="visa"><img class="img-fluid" src="assets/images/visa-label.png" alt="icon"></label>
        						</div>
        						<div>
        							<input name="cctype" value="M" type="radio" id="master-card">
        							<label for="master-card"><img class="img-fluid" src="assets/images/master-card-label.png" alt="icon"></label>
        						</div>
        						<div>
        							<input name="cctype" value="A" type="radio" id="american-express">
        							<label for="american-express"><img class="img-fluid" src="assets/images/american-express-label.png" alt="icon"></label>
        						</div>
        						<div>
        							<input name="cctype" value="D" type="radio" id="discover">
        							<label for="discover"><img class="img-fluid" src="assets/images/discover-label.png" alt="icon"></label>
        						</div>
        					</div>
        				</div>
        				<div class="form-group col-md-6">
                            <label for="inputEmail4" class="input-label">Card Holder Name</label>
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="input-label">Card Number</label>
                            <input type="text" class="form-control" placeholder="Enter Your Address">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputMonth" class="input-label">Expiration Month</label>
                            <select id="inputMonth" class="form-control">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputExpire" class="input-label">Expiration Year</label>
                            <select id="inputExpire" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="input-label">CVV</label>
                            <input type="text" class="form-control" placeholder="CVV">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group form-check agree-text">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree to terms and conditions</label>
                            </div>
                        </div>
                    </div>
                    <div class"form-row">
                        <div class="form-group col-md-6">
                            <div class="g-recaptcha"
                                data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <div>
                                <button type="submit" class="submit-form">PAY NOW</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div>
</section>

<?php include 'inc/footer.php'; ?>