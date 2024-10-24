<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include ('header.php');
    ?>
</head>

<body>
    <!-- Spinner Start -->
    <?php
include('topBarSpinner.php');
    ?>


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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Dolphin Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Dolphin</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- start of dolphin -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 text-center mb-5">Kizimkazi Dolphin Tour</h1>
                    <div class="dolphin-tour-info mb-5">
                        <p>
                            Kizimkazi, located on the southern tip of Zanzibar, is famous for its dolphin population. 
                            This tour gives visitors the chance to experience these playful creatures up close in their natural habitat. 
                            Early morning boat trips increase the likelihood of sightings, 
                            as dolphins are most active during the cooler parts of the day.
                        </p>
                        <p>
                            Kizimkazi is a home of several species of dolphin which include bottle-nosed and Humback dolphin. They can be sighted following a boat trip from the Village
                            
                        </p>
                    </div>
                    <div class="image-gallery mb-5">
                        <div class="row g-3">
                            <div class="col-md-4 col-6">
                                <img src="img/d1.jpg"  alt="Dolphin Tour 1" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/d1.jpg" alt="Dolphin Tour 2" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/d2.jpg" alt="Dolphin Tour 3" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/d3.jpg" alt="Dolphin Tour 4" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/d4.jpg" alt="Dolphin Tour 5" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/d5.jpg" alt="Dolphin Tour 6" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="mb-4">
                            <!-- <b>Experience</b>:Participants can observe bottlenose and humpback dolphins in the wild, with opportunities for swimming alongside them.
                             The Kizimkazi dolphin tour is not just about wildlife interaction but also includes a visit to the historic Kizimkazi Mosque, 
                            one of the oldest Islamic buildings in East Africa, adding a cultural aspect to the trip.                        
                        </p> -->
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="booking.php">Book Your Tour Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the dolphin explanation -->
        

    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>