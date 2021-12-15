<?php include 'inc/header.php'; ?>



<!-- Banner -->
<section class="bookingSCreen">
    <div class="container">
        <h1>Booking</h1>
    </div>
</section>	

<!-- Booking Wrapper  -->
<section class="bookingWrapper">
    <div class="container">    
        <form action="">
            <div class="stepperWrap">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="step-indicator">
                            <div class="step step1 active">
                                <div class="step-icon">1</div>
                                <p>Enter Ride Details</p>
                            </div>
                            <div class="indicator-line active"></div>
                            <div class="step step2">
                                <div class="step-icon">2</div>
                                <p>Choose a Vehicle</p>
                            </div>
                            <div class="indicator-line"></div>
                            <div class="step step3">
                                <div class="step-icon">3</div>
                                <p>Enter Contact Details</p>
                            </div>
                            <div class="indicator-line"></div>
                            <div class="step step4">
                                <div class="step-icon">4</div>
                                <p>Booking Summary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- step 1 starts here -->
            <div id="perInfo">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="stepperTabs">
                            <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
                                <!-- <li class="active"><a href="#distance" class="active"  data-toggle="tab">Distance</a></li> -->
                                <li><a href="#flat-rate" class="active"  data-toggle="tab">Flat Rate</a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- <div role="tabpanel" class="tab-pane fade in active show" id="distance">
                                    <div class="row m-0">
                                        <div class="label">
                                            <p>Ride Details</p>
                                        </div>
                                    </div>
                                    <div class="innerFields">
                                        <div class="form-row m-0">
                                                <div class="form-group col-md-6 p-0">
                                                <div class="">
                                                    <label for="inputEmail4">PICKUP DATE</label>
                                                    <input type="date" id="datepicker" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 p-0">
                                                <label for="inputPassword4">PICKUP TIME</label>
                                                <input type="time" id="appt" name="appt"  min="09:00" max="18:00" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="innerFields additionalField d-none">
                                        <div class="form-row m-0">
                                            <div class="form-group w-100 p-0">
                                                <div class="moreFields">
                                                    <label for="inputEmail4">PICKUP LOCATION </label>
                                                    <input type="text" class="form-control" placeholder="Enter a Location">
                                                    <div class="add-delete d-flex">
                                                        <span  class="removeIcon mr-2"><i class="far fa-minus-square"></i></span>
                                                        <span><i class="far fa-plus-square"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="innerFields">
                                        <div class="form-row m-0">
                                                <div class="form-group p-0">
                                                <div class="">
                                                    <label for="inputEmail4">DROP-OFF LOCATION </label>
                                                    <input type="text" class="form-control" placeholder="Enter a Location">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div role="tabpanel" class="tab-pane fade in active show" id="flat-rate">
                                    <div class="row m-0">
                                        <div class="label">
                                            <p>Ride Details</p>
                                        </div>
                                    </div>
                                    <div class="innerFields">
                                        <div class="form-row m-0">
                                                <div class="form-group col-md-6 p-0">
                                                <div class="">
                                                    <label for="inputEmail4">PICKUP DATE</label>
                                                    <input type="date" id="date1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 p-0">
                                                <label for="inputPassword4">PICKUP TIME</label>
                                                <input type="time" name="appt"  min="09:00" max="18:00" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Route</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Lousiana State University</option>
                                                <option>Oklahoma St</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="innerFields defaultField">
                                        <div class="form-row m-0">

                                            <div class="form-group w-100 p-0">
                                                <div class="addField">
                                                    <label for="inputEmail4">PICKUP LOCATION </label>
                                                    <span class="defaultState addIcon"><i class="far fa-plus-square"></i></span>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Full Name">
                                                    </div>
                                                    <div class="col">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="additionalFields"></div>

                                    <div class="innerFields">
                                        <div class="form-row m-0">
                                                <div class="form-group col-md-6 p-0">
                                                <div class="">
                                                    <label for="inputEmail4">USERNAME</label>
                                                    <input type="text" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 p-0">
                                                <label for="inputPassword4">EMAIL</label>
                                                <input type="email" name="emial" class="form-control" placeholder="Enter your email">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="mapWrap">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163941.2192153735!2d-100.68775536859945!3d39.24772143150898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1616007638779!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 col-md-6 col-lg-6 p-0">
                                    <div class="totalDist d-flex">
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div>
                                            <p>TOTAL DISTANCE</p>
                                            <span>0 Km</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 p-0">
                                    <div class="totalTime d-flex">
                                        <div class="icon"><i class="far fa-clock"></i></div>
                                        <div>
                                            <p>TOTAL TIME</p>
                                            <span>0 h 0 m</span>
                                        </div>
                                    </div>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nextStep">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-12 col-md-3 col-lg-3 mb-4">
                            <a href="#" id="1stnext">CHOOSE A VEHICLE <span><i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step 1 ends here -->


            <!-- step 2 starts here -->
                <div id="physProp">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="pick-up-details-sidebar">
                                <h4>Summary</h4>
                                <div class="show-details">
                                    <label>SERVICE TYPE</label>
                                    <p>Flat Rate</p>
                                </div>
                                <div class="show-details">
                                    <label>TRANSFER TYPE</label>
                                    <p>Flat Rate</p>
                                </div>
                                <div class="show-details">
                                    <label>PICKUP DATE, TIME</label>
                                    <div><span>20-03-2021</span>,<span>0:45</span></div>
                                </div>
                                <div class="show-details travel-details">
                                    <div>
                                        <p>TOTAL DISTANCE</p>
                                        <span>0 Km</span>
                                    </div>
                                    <div> 
                                        <p>TOTAL TIME</p>
                                        <span>0 h 0 m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="total-amount">
                                <div class="total d-flex"><span>Total</span> <span>$85.00</span> </div>
                                <div class="deposit d-flex"><p>To pay <span>(25% deposit)</span> </p> <span>$21.25</span> </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 col-lg-9">
                            <div class="label">
                                <p>VEHICLES FILTER</p>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 col-md-4 col-lg-4 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">PASSENGERS</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">SUITCASES</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">TYPE</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>-All Vehicles-</option>
                                                <option>Lamousine</option>
                                                <option>Sedan</option>
                                            </select>
                                            <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="vehicle-details d-flex">
                                    <div>
                                        <p> <b>RAV4</b> </p>
                                        <span>$ 0.00</span>
                                    </div>
                                    <div>
                                        <div class="custom-control form-control-lg custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="vehicle-details d-flex">
                                    <div>
                                        <p> <b>RAV3</b> </p>
                                        <span>$ 0.00</span>
                                    </div>
                                    <div>
                                        <div class="custom-control form-control-lg custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nextStep">
                        <div class="row">
                            <div class="col-12 col-md-3 col-lg-3 mb-4">
                                <a href="#" class="backBtn"  id="2ndback"><span><i class="fas fa-angle-left"></i></span> Choose Ride Details</a>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-12 col-md-3 col-lg-3 mb-4">
                                <a href="#" id="2ndnext">Enter Contact Details <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- step 2 ends here -->
            
            <!-- Step 3 starts here -->
                <div id="fileUpload">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="pick-up-details-sidebar">
                                <h4>Summary</h4>
                                <div class="show-details">
                                    <label>SERVICE TYPE</label>
                                    <p>Flat Rate</p>
                                </div>
                                <div class="show-details">
                                    <label>TRANSFER TYPE</label>
                                    <p>Flat Rate</p>
                                </div>
                                <div class="show-details">
                                    <label>PICKUP DATE, TIME</label>
                                    <div><span>20-03-2021</span>,<span>0:45</span></div>
                                </div>
                                <div class="show-details travel-details">
                                    <div>
                                        <p>TOTAL DISTANCE</p>
                                        <span>0 Km</span>
                                    </div>
                                    <div> 
                                        <p>TOTAL TIME</p>
                                        <span>0 h 0 m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="total-amount">
                                <div class="total d-flex"><span>Total</span> <span>$85.00</span> </div>
                                <div class="deposit d-flex"><p>To pay <span>(25% deposit)</span> </p> <span>$21.25</span> </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 col-lg-9">
                            <div class="label">
                                <p>CONTACT DETAILS</p>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 col-md-6 col-lg-6 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">FIRST NAME *</label>
                                            <input type="text" class="form-control" placeholder="Enter a Location">
                                            <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">LAST NAME *</label>
                                            <input type="text" class="form-control" placeholder="Enter a Location">
                                            <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 col-md-6 col-lg-6 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">EMAIL ADDRESS *</label>
                                            <input type="email" class="form-control" placeholder="">
                                            <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">PHONE NUMBER  *</label>
                                            <input type="text" class="form-control" placeholder="201-555-0123">
                                            <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 col-md-12 col-lg-12 p-0">
                                    <div class="innerFields">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">COMMENTS *</label>
                                            <textarea name="" id="" cols="" rows="4" class="contact-comments w-100"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label d-flex">
                                <label for="chkPassport" class="">
                                    <input type="checkbox" id="chkBtn" class="mr-2" />
                                        BILLING DETAILS
                                </label>
                            </div>
                            <!-- Billing Details Hidden -->
                            <div class="billing-collapse w-100" id="collapseDiv" style="display: none">
                                <div class="row m-0">
                                    <div class="col-12 col-md-6 col-lg-6 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">COMPANY REGISTERED NAME</label>
                                                <input type="email" class="form-control" placeholder="">
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">TAX NUMBER</label>
                                                <input type="text" class="form-control" placeholder="">
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <div class="col-12 col-md-4 col-lg-4 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">STREET *</label>
                                                <input type="email" class="form-control" placeholder="">
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">STREET NUMBER</label>
                                                <input type="text" class="form-control" placeholder="">
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">CITY  *</label>
                                                <input type="text" class="form-control" placeholder="">
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <div class="col-12 col-md-4 col-lg-4 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">STATE *</label>
                                                <input type="email" class="form-control" placeholder="">
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">POSTAL CODE  *</label>
                                                <input type="text" class="form-control" placeholder="">
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4 p-0">
                                        <div class="innerFields">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">COUNTRY *</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>United States</option>
                                                    <option>Canada</option>
                                                    <option>United Kingdom</option>
                                                </select>
                                                <!-- <span class="dropSelect"><i class="fa fa-chevron-down"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>



                            </div>
                            <div class="payment-method">
                                <h4>Choose payment method</h4>
                            </div>
                            <div class="row"> 
                                <div class="col-12 col-md-4 col-lg-4">
                                    <a href="#">
                                        <div class="method">
                                            <p><span class="mr-2"><i class="fas fa-wallet"></i></span> Cash</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <a href="#">
                                        <div class="method">
                                            <img src="assets/images/stripe.png" alt="stripe">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <a href="#">
                                        <div class="method">
                                            <img src="assets/images/paypal.png"  alt="paypal">
                                        </div>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nextStep">
                        <div class="row">
                            <div class="col-12 col-md-3 col-lg-3 mb-4">
                                <a href="#" class="backBtn" id="3rdback"><span><i class="fas fa-angle-left"></i></span> CHOOSE A VEHICLE</a>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-12 col-md-3 col-lg-3 mb-4">
                                <a href="#" id="3rdnext">BOOKING SUMMARY <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>  
                </div>
            <!-- Step 3 ends here -->

          
            <!-- Step 4 starts here -->
                <div id="fourthInfo">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="allSummary">
                                <div class="heading-bar">
                                    <h4>Contact & Billing Info</h4>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="show-details">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div>
                                                <label>FIRST NAME</label>
                                                <p>usman</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div> 
                                                <label>LAST NAME</label>
                                                <p>asif</p>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="show-details">
                                    <label>EMAIL ADDRESS</label>
                                    <p>abc@xyz.com</p>
                                </div>
                                <div class="show-details">
                                    <label>COMMENTS</label>
                                    <p>Book a ride</p>
                                </div>
                            </div>
                            
                            <div class="allSummary mt-4">
                                <div class="heading-bar">
                                    <h4>Payment Method</h4>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="show-details">
                                    <label>Your Choice</label>
                                    <p>Cash</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="mapWrap">
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163941.2192153735!2d-100.68775536859945!3d39.24772143150898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1616007638779!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="pick-up-details-sidebar allSummary mt-4">
                                <div class="heading-bar">
                                    <h4>Ride Details</h4>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="show-details">
                                    <label>SERVICE TYPE</label>
                                    <p>Flat Rate</p>
                                </div>
                                <div class="show-details">
                                    <label>FROM - TO</label>
                                    <p>Louisiana State University, Baton Rouge, LA, USA - Oklahoma City, OK, USA</p>
                                </div>
                                <div class="show-details">
                                    <label>PICKUP DATE, TIME</label>
                                    <div><span>20-03-2021</span>,<span>0:45</span></div>
                                </div>
                                <div class="show-details travel-details">
                                    <div>
                                        <p>TOTAL DISTANCE</p>
                                        <span>0 Km</span>
                                    </div>
                                    <div> 
                                        <p>TOTAL TIME</p>
                                        <span>0 h 0 m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="allSummary">
                                <div class="heading-bar">
                                    <h4>Vehicle Info</h4>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="show-details">
                                    <label>Vehicle</label>
                                    <p>RAV4</p>
                                </div>
                            </div>
                            <div class="total-amount">
                                <div class="total d-flex"><span>Total</span> <span>$85.00</span> </div>
                                <div class="deposit d-flex"><p>To pay <span>(25% deposit)</span> </p> <span>$21.25</span> </div>
                            </div>

                        </div>
                    </div>
                    <div class="nextStep">
                        <div class="row">
                            <div class="col-12 col-md-3 col-lg-3 mb-4">
                                <a href="#" class="backBtn" id="fourthBack"><span><i class="fas fa-angle-left"></i></span> ENTER CONTACT DETAILS</a>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-12 col-md-3 col-lg-3 mb-4">
                                <a href="#" id="fourthNExt">BOOK NOW <span><i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div> 
                </div>
            <!-- Step 4 starts here -->

        </form>
    </div>
</section>
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <h2>Want to know about our offer first?</h2>
                <h2>Subscribe our newsletter</h2>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <form action="">
                    <div class="input-group searchwrap mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" >
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    // on click add multiple fields
    var html = '<div class="innerFields">' + 
                    '<div class="form-row m-0">' + 
                        '<div class="form-group w-100 p-0">' +
                            '<div class="moreFields">' +
                                '<label for="inputEmail4">PICKUP LOCATION </label>' +
                                '<div class="add-delete d-flex">'+
                                    '<span  class="removeIcon mr-2"><i class="far fa-minus-square"></i></span>'+
                                    '<span class="addIcon"><i class="far fa-plus-square"></i></span>'+
                                '</div>'+
                            '</div>'+
                            '<div class="form-row">'+
                                '<div class="col">'+
                                    '<input type="text" class="form-control" placeholder="Full Name">'+
                                '</div>'+
                                '<div class="col">'+
                                    '<input type="email" class="form-control" placeholder="Email">'+
                                '</div>'+
                                '<div class="col">'+
                                    '<input type="text" class="form-control" placeholder="Phone">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
    $(function(){ 
        var addField = '.additionalFields';
        $("body").on('click', ".addIcon", function(){
            $(addField).append(html);
        });

        $("body").on("click", ".removeIcon", function () {
            $(this).closest(".innerFields").remove();
        });
    });
    // billing details show hide
    $(function () {
        $("#chkBtn").click(function () {
            if ($(this).is(":checked")) {
                $("#collapseDiv").show();
            } else {
                $("#collapseDiv").hide();
            }
        });
    });
    
    // payments methods css
    var selector = '.method';
    $(selector).on('click', function(){
        $(selector).removeClass('active');
        $(this).addClass('active');
    });

    //datepicker
    const picker = document.getElementById('date1');
        picker.addEventListener('input', function(e){
        var day = new Date(this.value).getUTCDay();
        if([1,2,3,4,5].includes(day)){
            e.preventDefault();
            this.value = '';
            alert('Weekdays not allowed');
        }
    });

    function that () {
	    console.log("Normal call");
	    console.log(this === window); 
    }
    that();
    console.log(this === window)

    

</script>




<?php include 'inc/footer.php'; ?>