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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Safari Blue Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Safari Blue</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- start of dolphin -->
    <!-- start of Safari Blue -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-center mb-5">Safari Blue Zanzibar</h1>
                <div class="safari-blue-info mb-5">
                    <p>
                        Safari Blue is one of Zanzibar’s most popular ocean excursions, offering an unforgettable day out on the turquoise waters of the Indian Ocean. Starting from Fumba on the southwest coast, the tour takes you on traditional dhow boats to explore the Menai Bay Conservation Area, known for its unspoiled beauty and rich marine life.
                    </p>
                    <p>
                        The adventure includes stops at sandbanks, tropical islands, and coral reefs, where you can enjoy snorkeling, swimming, and dolphin watching. Guests can feast on a delicious seafood barbecue lunch on one of the secluded islands, with fresh fish, calamari, and tropical fruits. The day ends with a leisurely sail back, often accompanied by a stunning sunset over the horizon.
                    </p>
                </div>
                <div class="image-gallery mb-5">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <img src="img/bluesafari1.jpg" alt="Safari Blue 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/bluesafari1.jpg" alt="Safari Blue 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/bluesafari1.jpg" alt="Safari Blue 3" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/bluesafari1.jpg" alt="Safari Blue 4" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/bluesafari1.jpg" alt="Safari Blue 5" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/bluesafari1.jpg" alt="Safari Blue 6" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-4">
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="booking.php">Book Your Tour Now</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- end of Safari Blue -->

    <!-- end of the dolphin explanation -->
        

    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>