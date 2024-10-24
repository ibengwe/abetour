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
            <h1 class="display-3 text-white mb-3 animated slideInDown">SunSet Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Sunset</li>
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
                    <h1 class="display-4 text-center mb-5">SunSet  Tour</h1>
                    <div class="dolphin-tour-info mb-5">
                        <p>
                        A sunset tour in Michamvi, Zanzibar, is a magical experience that highlights the region’s natural beauty,
                         pristine beaches, and stunning sunsets over the Indian Ocean. Michamvi is located on the southeastern 
                         coast of Zanzibar Island, known for its tranquility, crystal-clear waters, and breathtaking views
                        </p>
                        <p>
                        <b>Photography Opportunities:</b> As the sky shifts through hues of gold, orange, pink, and purple, the scenery offers 
                        stunning photo opportunities. 
                        The reflection of the sun on the water and the silhouette of the dhow sails create postcard-perfect moments.                            
                        </p>
                    </div>
                    <div class="image-gallery mb-5">
                        <div class="row g-3">
                            <div class="col-md-4 col-6">
                                <img src="img/sunset1.jpg"  alt="Sunset Tour 1" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/sunset11.jpg" alt="Sunset Tour 2" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/sunset3.jpg" alt="Sunset Tour 3" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/sunset4.jpg" alt="Sunset Tour 4" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/sunset6.jpg" alt="Sunset Tour 5" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="img/sunset7.jpg" alt="Sunset Tour 6" class="img-fluid rounded">
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