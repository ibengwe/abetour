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
    <!-- Topbar End -->


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
            <h1 class="display-3 text-white mb-3 animated slideInDown">The Rock Restaurant</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Rock Restaurant</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- start of dolphin -->
    <!-- Here's an explanation of the Jozani Forest in the same style as your dolphin tour description: -->

<!-- start of Jozani Forest -->
<!-- Here's an explanation of The Rock Restaurant in the same style: -->

<!-- start of The Rock Restaurant -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-center mb-5">The Rock Restaurant Experience</h1>
                <div class="rock-restaurant-info mb-5">
                    <p>
                        Perched on a rock in the crystal-clear waters of the Indian Ocean, The Rock Restaurant is one of Zanzibar’s most iconic dining spots. Located off the shore of Michamvi Pingwe beach, this unique restaurant offers not just a meal, but an unforgettable experience with breathtaking ocean views.
                    </p>
                    <p>
                        The Rock can be reached by foot during low tide, while a short boat ride is needed when the tide is high. This extraordinary location, coupled with its fresh seafood and traditional Swahili dishes, makes it a must-visit for travelers seeking a memorable dining adventure in Zanzibar.
                    </p>
                </div>
                <div class="image-gallery mb-5">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <img src="img/rock2.jpg" alt="The Rock Restaurant 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/rock3.jpg" alt="The Rock Restaurant 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/rock4.jpg" alt="The Rock Restaurant 3" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/rock5.jpg" alt="The Rock Restaurant 4" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/rock6.jpg" alt="The Rock Restaurant 5" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/rock7.jpg" alt="The Rock Restaurant 6" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="booking.php">Reserve Your Table Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of The Rock Restaurant explanation -->


    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>