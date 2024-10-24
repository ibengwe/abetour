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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Village Tour</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Village Tour</li>
                </ol>
            </nav>
        </div>
    </div>
   >
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-center mb-5">Village Tour</h1>
                <div class="stone-town-info mb-5">
                    <p>
                    A village tour in Zanzibar offers a rich cultural experience, allowing visitors to explore the local Swahili way of life. 
                    These tours typically take you to traditional villages where you can interact with the locals,
                     learn about their daily activities, and experience the island’s unique heritage.                    
                    </p>
                    <p>
                    <b>Spice Farms</b>: Many village tours include visits to spice farms, where you can see how cloves, cinnamon, vanilla, and other spices are grown, harvested, and processed.
                    <br><b>Cultural Interaction</b>: You'll have the chance to meet local artisans, watch traditional performances, and learn Swahili language basics.
                    <br><b>Traditional Cuisine</b>: Often, the tour includes a home-cooked meal, allowing visitors to taste authentic Swahili dishes like pilau, samosas, and fresh tropical fruits.
                    <br><b>Handicrafts and Souvenirs</b>: Villagers often showcase handmade crafts, such as baskets, pottery, and jewelry, which you can purchase as souvenirs.                   
                 </p>
                
                </div>
                <div class="image-gallery mb-5">
                    <div class="row g-3">
                        <div class="col-md-village6 col-6">
                            <img src="img/stone1.jpg" alt="Stone Town 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/village1.jpg" alt="Stone Town 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/village2.jpg" alt="Stone Town 3" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/village3.jpg" alt="Stone Town 4" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/village4.jpg" alt="Stone Town 5" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="img/village5.jpg" alt="Stone Town 6" class="img-fluid rounded">
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