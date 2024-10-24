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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Stown Town Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Stone Town</li>
                </ol>
            </nav>
        </div>
    </div>
   >
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-center mb-5">Stone Town Tour</h1>
                <div class="stone-town-info mb-5">
                    <p>
                        Stone Town is the historic heart of Zanzibar City, and a UNESCO World Heritage Site. Known for its narrow, winding streets, bustling markets, and a blend of Arabic, Indian, and European architecture, Stone Town is a living museum of the island’s history.
                    </p>
                    <p>
                        On this tour, you’ll explore important landmarks such as the Sultan's Palace, the Old Fort, and the House of Wonders. The vibrant markets offer a unique opportunity to experience local life and cuisine. Stone Town is also closely tied to the history of the spice trade and the slave trade, making it an essential destination for history enthusiasts.
                    </p>
                </div>
                <div class="image-gallery mb-5">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <img src="img/stone1.jpg" alt="Stone Town 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/stone2.jpg" alt="Stone Town 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/stone3.jpg" alt="Stone Town 3" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/stone4.jpg" alt="Stone Town 4" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/stone5.jpg" alt="Stone Town 5" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/stone6.jpg" alt="Stone Town 6" class="img-fluid rounded">
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
<!-- end of Stone Town -->



    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>