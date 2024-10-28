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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Prison Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Prison</li>
                </ol>
            </nav>
        </div>
    </div>
   
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-center mb-5">Prison Island Tour</h1>
                <div class="prison-island-info mb-5">
                    <p>
                        Prison Island, also known as Changuu Island, lies just off the coast of Zanzibar and offers a unique historical and wildlife experience. Originally intended as a prison, the island was later used as a quarantine station for yellow fever victims. Today, it is a popular destination for visitors looking to explore its history and wildlife.
                    </p>
                    <p>
                        The island is home to a sanctuary of giant Aldabra tortoises, some of which are over 100 years old. Visitors can interact with these gentle giants and explore the remains of the historical prison buildings while enjoying the island’s stunning beaches and crystal-clear waters.
                    </p>
                </div>
                <div class="image-gallery mb-5">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <img src="img/prison1.jpg" alt="Prison Island 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/prison2.jpg" alt="Prison Island 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/prison3.jpg" alt="Prison Island 3" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/prison4.jpg" alt="Prison Island 4" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/prison5.jpg" alt="Prison Island 5" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/prison6.jpg" alt="Prison Island 6" class="img-fluid rounded">
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

    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>