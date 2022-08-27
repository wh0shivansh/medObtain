<?php
session_start();  


if(isset($_POST['submit'])){
    if(!empty($_POST['available'])){
        foreach($_POST['available'] as $selected){
            echo ' '.$selected;
            if($selected.trim() == "blood"){
                header("Location:".$selected.".php");
                exit();
            }
            else if($selected.trim() == "oxygencyl"){
                header("Location: ./available.php?option=oxygencyl");
                exit();
            }
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
    <link rel="icon" type="image/x-icon" href="Assets/logo.png">
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

    <!-- about our company -->
    <div class="container-fluid about">
        <div class="row">
            <div class="col-md-6 doctor-img d-flex justify-content-center align-items-center" style="height:100%;">
                <!-- image section -->
                <img src="./Assets/doctor.png" alt="">
            </div>
            <!-- content section  -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h1 class="text-dark quick">Why Med<span style="color:var(--green);">Obtain</span> ?</h1>
                <p>MedObtain is a site that gives user the ease and benefit of finding resources without travelling
                    expenses. It is a one stop destination for all your basic requirements regarding the need of any
                    type of blood, oxygen cylinders, covid vaccines and many more.It allows user to find impotant needs
                    within seconds.At MedObtain we have the collection of the databases of all the hospitals in your
                    local area.
                </p>
                <div class="buttons">
                    <button>About More</button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <hr style="background-color: #d0cecee0;">


    <!-- quick service section  -->
    <div class="container-fluid quick-service-section">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body ">
                        <h1 class="text-dark quick justify-content-center d-flex" style="font-family:'lato';"> <b> Get
                                <span class="color-green">Started</span></b> </h1>
                            <!-- Content -->
                            <p class="text-center" style="font-family: 'lato';font-weight:bold;font-size: 1.3rem;">Sign Up for an Organisation and start helping needy people</p>
                            <form class="form px-30" method="post" action="/login_validation">
                              <input type="name" class="form-control form-input" name="email" placeholder="Name"><br>
                              <input type="email" class="form-control form-input" name="email" placeholder="Email"><br>
                              <input type="password" class="form-control form-input" name="password" placeholder="Password"><br>
                              <input type="password" class="form-control form-input" name="confirmpassword" placeholder="Confirm-Password">
                              <br><br>
                              <input type="Submit" class="btn btn-primary btn-block btn-lg d-flex justify-content-center align-items-center form-button" vlaue="login">
                            </form>





                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="card-body d-flex flex-column  align-items-center">
                        <h1 class="text-dark quick" style="font-family:'lato';"> <b> Urgent<span
                                    class="color-green">Need</span></b> </h1> <br>
                        <br><br><br>
                        <h5>What are you looking for?</h5>
                        <p style="font-family: 'lato';font-size: 1.3rem;">Select from the options below</p>
                        <form action="" method="post" class="mb-3">
                            <select name="available[]">
                                <option value="" disabled selected>Select Service</option>
                                <option value="blood">Blood</option>
                                <option value="oxygencyl">Oxygen Cylinder</option>
                                <option value="vaccine">Vaccine Centre</option>
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

    <!-- Services section  -->
    <br>
    <h1 class="one-tap-solution text-center">One Tap&nbsp;<span>Solution!</span></h1>
    <div class="bgimage">
        <!-- <img src="Assets/emergency.jpg" alt="hjopo"> -->
        <span class="bg-span"></span>
        <br><br><br><br>
        <br><br>
        <div class="container my-services-container">
            <div class="card-deck mb-3 text-center">



                <div class="card mb-3 box-shadow">
                    <div class="card-header" style="border: none;">
                        <h4 class="my-0 font-weight-normal">Blood <span class="color-green">Availability</span></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4 text-left">
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque vel voluptatem libero
                                dolores quam dolor, recusandae repellat illum ab, magnam, minima provident nostrum
                                eveniet nesciunt at soluta hic incidunt? Perspiciatis.</li>

                        </ul>
                        <button type="button" class="btn btn-lg btn-block one-tap-links">Check Now</button>
                    </div>
                </div>
                <div class="card mb-3 box-shadow">
                    <div class="card-header" style="border: none;">
                        <h4 class="my-0 font-weight-normal">Oxygen <span class="color-green">Cylinders</span></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4 text-left">
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque vel voluptatem libero
                                dolores quam dolor, recusandae repellat illum ab, magnam, minima provident nostrum
                                eveniet nesciunt at soluta hic incidunt? Perspiciatis.</li>

                        </ul>
                        <button type="button" class="btn btn-lg btn-block  one-tap-links">Check Now</button>
                    </div>
                </div>
                <div class="card mb-3 box-shadow">
                    <div class="card-header" style="border:none;">
                        <h4 class="my-0 font-weight-normal">Vaccine <span class="color-green">Centres</span></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4 text-left">
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque vel voluptatem libero
                                dolores quam dolor, recusandae repellat illum ab, magnam, minima provident nostrum
                                eveniet nesciunt at soluta hic incidunt? Perspiciatis.</li>

                        </ul>
                        <button type="button" class="btn btn-lg btn-block  one-tap-links">Check Now</button>
                    </div>
                </div>





            </div>
        </div>
        <br><br><br>
        <br>
    </div>
    <br><br><br>

    <br><br><br>


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