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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Not Found</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="index.php">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>