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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                    <p class="mb-4">
                        </p>
                        <iframe class="position-relative w-100"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31702.608078601702!2d39.52570867160233!3d-6.26339180531785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4819f0e1f33b%3A0xa2e82d4a8ae198da!2sPaje%2C%20Tanzania!5e0!3m2!1sen!2sbd!4v1695738929742!5m2!1sen!2sbd"
    frameborder="0" style="height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
</iframe>

                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                    <form id="contactForm" action="https://api.web3forms.com/submit" method="POST" onsubmit="return handleSubmit(event)">
    <input type="hidden" name="access_key" value="35cf086a-8683-4ae4-859f-353b1076062a">
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                <label for="subject">Subject</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
        </div>
    </div>
</form>

<div id="successMessage" style="display: none; text-align: center;">
    <h3>Thank you for your message!</h3>
    <p>Your message has been sent successfully.</p>
    <button class="custom-back-button" onclick="goBack()">Go Back</button>
</div>

<style>
    .custom-back-button {
        background-color: #4CAF50; /* Green background */
        color: white; /* White text */
        padding: 10px 20px; /* Padding */
        font-size: 16px; /* Font size */
        border: none; /* Remove border */
        border-radius: 8px; /* Rounded corners */
        cursor: pointer; /* Pointer cursor on hover */
        transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
    }

    .custom-back-button:hover {
        background-color: #45a049; /* Darker green on hover */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Slight shadow on hover */
    }

    .custom-back-button:focus {
        outline: none; /* Remove default focus outline */
        box-shadow: 0px 0px 0px 3px rgba(76, 175, 80, 0.4); /* Custom focus ring */
    }
</style>

<script>
function goBack() {
    const form = document.getElementById('contactForm');
    form.reset();
    form.style.display = 'block';
    document.getElementById('successMessage').style.display = 'none';
}
</script>


<script>
function handleSubmit(event) {
    event.preventDefault(); // Prevent default form submission
    const form = document.getElementById('contactForm');
    
    // Submit form data to Web3Forms
    fetch(form.action, {
        method: form.method,
        body: new FormData(form)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Hide form and show success message
            form.style.display = 'none';
            document.getElementById('successMessage').style.display = 'block';
        }
    })
    .catch(error => console.error('Form submission error:', error));
}

function goBack() {
    // Clear form data and show the form again
    const form = document.getElementById('contactForm');
    form.reset();
    form.style.display = 'block';
    document.getElementById('successMessage').style.display = 'none';
}
</script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
</body>

</html>