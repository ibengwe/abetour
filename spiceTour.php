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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Spice Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Spice</li>
                </ol>
            </nav>
        </div>
    </div>
    
<!-- start of Spice Tour -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-center mb-5">Zanzibar Spice Tour</h1>
                <div class="spice-tour-info mb-5">
                    <p>
                        Zanzibar is famously known as the "Spice Island" due to its historical role in the spice trade. The Spice Tour takes visitors on an aromatic journey through lush spice plantations, where you can learn about the cultivation and uses of exotic spices like cloves, cinnamon, cardamom, and nutmeg.
                    </p>
                    <p>
                        This tour provides a sensory experience, allowing visitors to see, touch, and taste spices straight from the source. You will also learn about traditional medicine, fruits, and herbs grown on the island. The Spice Tour is a wonderful way to connect with Zanzibar’s agricultural heritage and culture.
                    </p>
                </div>
                <div class="image-gallery mb-5">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <img src="img/spice1.jpg" alt="Spice Tour 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/spice2.jpg" alt="Spice Tour 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/spice3.jpg" alt="Spice Tour 3" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/spice4.jpg" alt="Spice Tour 4" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/spice5.jpg" alt="Spice Tour 5" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/spice6.jpg" alt="Spice Tour 6" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-4">
                        <!-- <b>Experience</b>: Learn the secrets behind Zanzibar’s world-famous spices, discover how they are harvested, and enjoy tasting tropical fruits and traditional dishes prepared with freshly picked spices. -->
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="booking.php">Book Your Spice Tour Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of Spice Tour -->



    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>