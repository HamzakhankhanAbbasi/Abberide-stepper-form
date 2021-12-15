<?php include 'inc/header.php'; ?>



<section class="bookingSCreen">
    <div class="container">
        <h1>Booking</h1>
    </div>
</section>

<section class="bookingSlots">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <div class="date-slot">
                    <div class="">
                        <label for="newdate" class="date-label">PICKUP DATE</label>
                        <input type="text" id="newdate" class="form-control" value="02:50 pm" disabled>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 mb-4">
                <div class="time-slot">
                    <div class="slot-heading">
                        <h4>Pick Up A Time Slot</h4>
                    </div>
                    <ul class="ul-check">
                        <li class="li-check">
                            <input type="radio" id="slot1" name="WorkType[]" value="Acoustical Ceiling">
                            <label for="slot1">1:00</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot2" name="WorkType[]" value="Building Repair">
                            <label for="slot2">1:15</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot3" name="WorkType[]" value="Carpet">
                            <label for="slot3">1:30</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot4" name="WorkType[]" value="Code Check">
                            <label for="slot4">1:45</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot5" name="WorkType[]" value="Electrical">
                            <label for="slot5">2:00</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot6" name="WorkType[]" value="Electrical">
                            <label for="slot6">2:15</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot7" name="WorkType[]" value="Electrical">
                            <label for="slot7">2:30</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot8" name="WorkType[]" value="Electrical">
                            <label for="slot8">2:45</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot9" name="WorkType[]" value="Electrical">
                            <label for="slot9">3:00</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot10" name="WorkType[]" value="Electrical">
                            <label for="slot10">3:15</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot11" name="WorkType[]" value="Electrical">
                            <label for="slot11">3:30</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot12" name="WorkType[]" value="Electrical">
                            <label for="slot12">3:45</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot13" name="WorkType[]" value="Electrical">
                            <label for="slot13">4:00</label>
                        </li>
                        <li class="li-check">
                            <input type="radio" id="slot14" name="WorkType[]" value="Electrical">
                            <label for="slot14">4:15</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <div class="note">
                    <p> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Amet reprehenderit dignissimos, cumque error explicabo 
                        quidem maiores molestiae perferendis perspiciatis ut 
                        laudantium odio similique eveniet consectetur architecto 
                        repellat tenetur totam neque
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4"></div>
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <div class="nextStep">
                    <a href="#" id="1stnext">Next <span><i class="fas fa-angle-right"></i></span></a>
                </div>
            </div>        
        </div>
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


<?php include 'inc/footer.php'; ?>