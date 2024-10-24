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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Safar Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">safari</li>
                </ol>
            </nav>
        </div>
    </div>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-center mb-5">Tanzania Safari Adventure</h1>
                <div class="safari-tanzania-info mb-5">
                    <p>
                        Tanzania is home to some of Africa's most iconic national parks and game reserves, making it the ultimate destination for a thrilling safari experience. From the vast plains of the Serengeti to the stunning Ngorongoro Crater, a Tanzanian safari offers unmatched wildlife viewing opportunities.
                    </p>
                    <p>
                        Visitors can witness the majestic “Big Five” – lions, elephants, buffalo, leopards, and rhinos – in their natural habitats. Safaris are available in open 4x4 vehicles, providing close encounters with wildlife and the chance to witness the famous Great Migration, where millions of wildebeests and zebras cross the Serengeti.
                    </p>
                </div>
                <div class="image-gallery mb-5">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <img src="img/elephant.jpg" alt="Safari Tanzania 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/lion.jpg" alt="Safari Tanzania 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/giraffes.jpg" alt="Safari Tanzania 3" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/hippos.jpg" alt="Safari Tanzania 4" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/zebra.jpg" alt="Safari Tanzania 5" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/birds.jpg" alt="Safari Tanzania 6" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-4">
                        <!-- <b>Experience</b>: Immerse yourself in the awe-inspiring wilderness of Tanzania, with opportunities to see diverse wildlife, including cheetahs, giraffes, and elephants, while staying in luxury lodges or tented camps for an authentic safari adventure. -->
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="booking.php">Book Your Safari Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of Safari Tanzania -->


    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>