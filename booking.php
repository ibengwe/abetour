<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include ('header.php');
    ?>
</head>

<body>
    
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
    <?php
            include('navbar.php');

        
        ?>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class="container-fluid px-0" style="margin: 6rem 0;">
       
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                        <h1 class="mb-4">Book For A Service</h1>
                        <form action="https://api.web3forms.com/submit" method="POST">
                            <input type="hidden" name="access_key" value="35cf086a-8683-4ae4-859f-353b1076062a">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="name" id="name" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" name="email" id="email" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="tel" class="form-control border-0" name="phone" id="phone" placeholder="Your Phone Number" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="address" id="address" placeholder="Your Address" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" id="service" style="height: 55px;" required name="service">
                                        <option value="" selected disabled>Select A Service</option>
                                        <option value="Dolhin Tour">Dolhin Tour</option>
                                        <option value="Spice Tour">Spice Tour</option>
                                        <option value="City Tour">City Tour</option>
                                        <option value="safari Blue">safari Blue</option>
                                        <option value="The Rock">The Rock</option>
                                        <option value="Jozani Forest">Jozani Forest</option>
                                        <option value="Prison Island">Prison Island</option>
                                        <option value="Village Tour">Village Tour</option>
                                        <option value="Snorkeling Trip">Snorkeling Trip</option>
                                        <option value="Sun Set">SunSetk</option>
                                        <option value="Safari Tanzania">Safari Tanzania</option>
                                        <option value="Scooter Rent">Scooter Rentk</option>
                                        <option value="Car Rent">Car Rent</option>


                                        <option value="The Rock">The Rock</option>

                                        <option value="Airpot Pickup/Drop Off">Airpot Pickup/Drop Off</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" name="servicedate" class="form-control border-0 datetimepicker-input" id="serviceDate" placeholder="Preferred Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" id="timePreference" style="height: 55px;" required name="time">
                                        <option value="" selected disabled>Preferred Time</option>
                                        <option value="Morning">Morning (8AM - 12PM)</option>
                                        <option value="Afternoon">Afternoon (12PM - 4PM)</option>
                                        <option value="Evening">Evening (4PM - 8PM)</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" id="urgency" style="height: 55px;" required name="people ">
                                        <option value="" selected disabled>How many people</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="10-15">10-15</option>


                                    </select>
                                </div> 
                                <div class="col-12">
                                    <textarea class="form-control border-0" id="description" name="comment" placeholder="Please Add a Extra Comment" rows="4" required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="termsAgree" required name="accept">
                                        <label class="form-check-label" for="termsAgree">
                                            I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
        

    <!-- Footer Start -->
    
    <?php
    include('footer.php');
    ?>
</body>

</html>