<?php 
session_start();

include("navbar.php");

 ?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/carousel.jpeg");

  /* Full height */
  height: 60%; 

  /* Center and scale the image nicely */
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}

.fa {
  padding: 20px;
  font-size: 30px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.active-cyan-3 input[type=text] {
  border: 1px solid #4dd0e1;
  box-shadow: 0 0 0 1px #4dd0e1;
}
</style>

<div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Temporibus incidunt odio quos <br> dolore commodi repudiandae
            tenetur consequuntur et similique asperiores.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119270.54670247904!2d77.76174549999999!3d20.9040872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a4a67774bc15%3A0x3c7b3f78ca4f9635!2sAmravati%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1711392464373!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                        <a href="https://maps.app.goo.gl/iBotBDaRBVw7X2Ve8" target="_blank"  class="d-inline-block text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill"></i> Amravati City
                        </a>
                    <h5 class="mt-4">Call us</h5>
                        <a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +917778889991
                        </a>
                        <br>
                        <a href="tel: +917778889991" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +917778889991
                        </a>
                    <h5 class="mt-4">Email</h5>>
                        <a href="mailto: ask.tjwebdev@gmail.com" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill"></i> ask.tjwebdev@gmail.com
                        </a>
                    <h5 class="mt-4">Follow us</h5>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bil bi-twitter me-1"></i> 
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-facebook me-1"></i> 
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5">
                            <i class="bi bi-instagram me-1"></i> 
                        </a>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                        <form>
                            <h5>Send a message</h5>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Subject</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Message</label>
                                <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                        </form>
                    </div>    
                </div>
            </div>
        </div>

<?php 

include("property-list.php");

 ?>
 <br><br>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel-FACILITIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <?php require ('inc/header.php'); ?>
   
        <?php require('inc/footer.php'); ?>
</body>
</html> -->