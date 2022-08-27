<?php
    session_start();

    $option = "blood";
?>

<?php
            if(isset($_POST['submit'])){
                if(!empty($_POST['bloodtype'])){
                    foreach($_POST['bloodtype'] as $selected){
                        echo ' '.$selected;
                        $_SESSION['blood_type'] = $selected;
                        $type = $selected;
                        header("Location:available.php?option=".$option."&type=".$type);
                        exit();
                    }
                }
                else{
                    echo"Please select an option";
                }
            }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <title>MedObtain</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="footer.css"> -->
</head>

<body>
  <!-- Navbar section -->

  <!-- <div class="popup-tagline">
        <p>Urgent need of blood, Oxygen Cylinder & more ? &nbsp;&nbsp;&nbsp;<span class="popup-link">click here</span>
        </p>
        <p>X</p>
    </div>  -->
  <nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Med<span class="logo-nth-2">Obtain</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item active pad-right">
          <a class="nav-link " href="#">Oxygen Cylinders</a>
        </li>
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0"> -->
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit">Search</button> -->
      <button class="btn btn-outline-success login-register-btn my-sm-0" type="submit">Login / Register</button>
      <!-- </form> -->
    </div>
  </nav>

  <div class="spacing-div"></div>

  <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div  class="my-container d-flex flex-column justify-content-center align-items-center">
                    <h1>Med<span class="color-green">Obtain</span></h1>
                    <p style="font-family:'lato';font-weight:bold;font-size:1.2rem;">Still wandering around hospitals?  Why not try Med<span class="color-green" >Obtain</span>.</p>
                </div>
                <img src="./Assets/bg.jpg" alt="">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
  </div>
  <br>


  <br>
  <hr style="background-color: #d0cecee0;">


  <!-- quick service section  -->
  <div class="container-fluid quick-service-section" id="urgent-need">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h1 class="text-dark mt-30 quick" style="font-family:'lato';"> <b> Get <span
                  class="color-green">Started</span></b> </h1> <br>
            <h5>Are you an organisation and wanted to help people in urgent need?</h5> <br>
            <h3>Then Sign Up here,</h3>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mt-30">
          <div class="card-body d-flex flex-column  align-items-center">
            <h1 class="text-dark mt-30 quick" style="font-family:'lato';"> <b> Urgent<span
                  class="color-green">Need</span></b> </h1> <br>
            <h5>Which Blood Group are you looking for?</h5>
            <p style="font-family: 'lato';font-size: 1.3rem;">Select from the options below</p>
            <form action="" method="post" class="mb-3">
              <select name="bloodtype[]">
                <option value="" disabled selected>Select Blood Type</option>
                <option value="a">A+</option>
                <option value="b">B+</option>
                <option value="ab">AB+</option>
                <option value="opos">O+</option>
                <option value="oneg">O-</option>
              </select>
              <input type="submit" name="submit" value="Confirm & Proceed">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>
  <br><br>



  <script>
    var swiper = new Swiper(".mySwiper", {
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    window.addEventListener('load', () => {
      window.scrollTo(0, 500);
    })

    jQuery("html").animate({
      scrollTop: jQuery("#urgent-need").offset().top
    })
  </script>

<div class="container-fluid">

<!-- Footer -->
<footer class="bg-dark text-center text-white" ">
<!-- Grid container -->
<div class=" container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
        <!-- Facebook -->
        <a class="btn  btn-floating m-1" href="#!" role="button">
            <img src="Assets/facebook.svg" style="height:34px;width:30px;filter:invert(100%);" alt="">
        </a>

        <!-- Twitter -->
        <a class="btn  btn-floating m-1" href="#!" role="button">
            <img src="Assets/twitter.svg" style="height:34px;width:30px;filter:invert(100%);" alt="">
        </a>

        <!-- Instagram -->
        <a class="btn  btn-floating m-1" href="#!" role="button">
            <img src="Assets/instagram.svg" style="height:34px;width:30px;filter:invert(100%);" alt="">
        </a>

        <!-- Linkedin -->
        <a class="btn  btn-floating m-1" href="#!" role="button">
            <img src="Assets/linkedin.svg" style="height:34px;width:30px;filter:invert(100%);" alt="">
        </a>

        <!-- Github -->
        <a class="btn  btn-floating m-1" href="#!" role="button">
            <img src="Assets/github.svg" style="height:34px;width:30px;filter:invert(100%);" alt="">
        </a>
    </section>
    <!-- Section: Social media -->


    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4 mt-30">
        <p style="font-family:'poppins';font-size:1.2rem;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
            repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
            eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h3 class="text-uppercase color-green text-left">Contact Us</h3>

                <ul class="list-unstyled mb-0 text-left">
                    <li>
                        <a href="#!" class="text-white">medobtain@xyz.com</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">(+91) XXX XXX XXXX</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Jabalpur</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase"></h5>

                <ul class="list-unstyled mb-0 text-left">
                    <li>
                        <a href="#!" class="text-white blockquote">Home</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white blockquote">About</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white blockquote">Contact Us</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white blockquote">Check Availability</a>
                    </li>

                </ul>
            </div>
            <!--Grid column-->


            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <!-- Section: Form -->
                <section class="">
                    <form action="">
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-auto">
                                <p class="pt-2">
                                    <strong style="font-family:'lato';font-weight:bold;">For More <span
                                            class="color-green">Help</span></strong>
                                </p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-5 col-12">
                                <!-- Email input -->
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="form5Example21" class="form-control"
                                        placeholder="Enter Your Problem" />
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-auto">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-outline-light mb-4">
                                    Mail Us
                                </button>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </form>
                </section>

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </section>
    <!-- Section: Links -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
© 2020 Copyright:
<a class="text-white" href="https://mdbootstrap.com/">MedObtain</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

</div>
</body>

</html>