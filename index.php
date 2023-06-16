<?php
if (!isset($_COOKIE['loged_in']))
    header('location:signin.php?rid=5');
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="jquery.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300&family=Roboto+Slab:wght@700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="script2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="jquery.js"></script>
    <title>Colony Hotel</title>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-md ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img id="logohotel" src="pics/logo2.webp" alt=""></a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i style="color: black;" class="fa fa-bars"></i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Fac1">Our Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why1">Why-Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gal1">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offers.php">Room Prices</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php">Book Room</a>
                    </li>

                    <li class="nav-item ml-2" id="booktable">
                        <a class="nav-link" href="Team.php">Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <!-- --------------------Banner------------------------ -->


    <section>
        <div class="container-fluid Full-cotain">
            <div class="row">
                <div class="col-md-4 pt-5 pb-5">
                    <h1 class="BH col-md-12 pt-5 pl-3">Colony Hotel</h1>
                    <p class="BP pl-3">Our hotel is a commercial establishment that provides lodging, meals, and other
                        services to guests, travelers, and tourists. Hotels can range from small family-run businesses
                        to large international chains. Most hotels list a variety of services, such as room service,
                        laundry, and concierge</p>

                </div>
            </div>
        </div>
    </section>
    <br>

    <section>
        <div class="container-fluid accomodations">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <h1 class="hotel-name">Colony Hotel</h1>
                    <h1 class="AH">Our Accomodations</h1>
                    <p class="AP">We Provide Luxury to You</p>
                </div>
            </div>
        </div>
    </section>
    <br>



    <!-- ===================carousel container========================== -->
    <section>
        <div class="container-fluid carousel-sec">
            <div class="row ">


                <div class="col-md-2">

                </div>

                <div class="col-md-8 carousel-main">

                    <div class="row">

                        <div class="carousel-data col-md-6 mt-3">
                            <h1>Family Sweet</h1>
                            <div class="carousel-icons">
                                <i class="fa-solid fa-people-group">&nbsp;&nbsp;&nbsp;4
                                    Peoples</i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa-solid fa-water">&nbsp;&nbsp;&nbsp;Hot water</i>
                                <br><br>
                                <i class="fa-solid fa-bowl-food">&nbsp;&nbsp;&nbsp;Room
                                    Service</i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa-solid fa-person-booth">&nbsp;&nbsp;&nbsp;1000 sq ft</i>
                            </div>
                            <p>Feel the elegance in every inch of this spacious unit. Walk into your private space with
                                the undulating plantations as your back garden. Large glass doors and windows allow the
                                sunshine to slant into your subtly sophisticated living area.</p>

                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="pics\room1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room4.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <div class="col-md-2">

                </div>


            </div>
        </div>
        <br><br><br>


        <!-- ========================= 2nd carousel ========================== -->

        <div class="container-fluid carousel-sec">
            <div class="row ">


                <div class="col-md-2">

                </div>

                <div class="col-md-8 carousel-main">

                    <div class="row">


                        <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="pics\room2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>



                        <div class="carousel-data col-md-6 mt-3">
                            <h1>Couples Sweet</h1>
                            <div class="carousel-icons">
                                <i class="fa-solid fa-people-group">&nbsp;&nbsp;&nbsp;2
                                    Peoples</i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa-solid fa-water">&nbsp;&nbsp;&nbsp;Hot water</i>
                                <br><br>
                                <i class="fa-solid fa-bowl-food">&nbsp;&nbsp;&nbsp;Room
                                    Service</i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa-solid fa-person-booth">&nbsp;&nbsp;&nbsp;700 sq ft</i>
                            </div>
                            <p>Feel the elegance in every inch of this spacious unit. Walk into your private space with
                                the undulating plantations as your back garden. Large glass doors and windows allow the
                                sunshine to slant into your subtly sophisticated living area.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-2">

                </div>


            </div>
        </div>

        <!--================================ 3rd carousel========================== -->

        <br><br><br>
        <div class="container-fluid carousel-sec">
            <div class="row ">


                <div class="col-md-2">

                </div>

                <div class="col-md-8 carousel-main">

                    <div class="row">

                        <div class="carousel-data col-md-6 mt-3">
                            <h1>Family Sweet</h1>
                            <div class="carousel-icons">
                                <i class="fa-solid fa-people-group">&nbsp;&nbsp;&nbsp;5
                                    Peoples</i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa-solid fa-water">&nbsp;&nbsp;&nbsp;Hot water</i>
                                <br><br>
                                <i class="fa-solid fa-bowl-food">&nbsp;&nbsp;&nbsp;Room
                                    Service</i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa-solid fa-person-booth">&nbsp;&nbsp;&nbsp;1100 sq ft</i>
                            </div>
                            <p>Feel the elegance in every inch of this spacious unit. Walk into your private space with
                                the undulating plantations as your back garden. Large glass doors and windows allow the
                                sunshine to slant into your subtly sophisticated living area.</p>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="pics\room3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="pics\room2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <div class="col-md-2">

                </div>


            </div>
        </div>
    </section>


 <!-- ---------------------our facilities------------ -->
    <section id="Fac1" class="Our Facilities mt-5 pt-4 mb-4">
        <h2 class="text-center fw-bold h-font">Our Facilities</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/wifi.svg" width="80px">
                    <h5 class="mt-3">WIFI</h5>
                </div>
                <div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/water-heater.svg" width="80px">
                    <h5 class="mt-3">Water Heater</h5>
                </div>
                <div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/humidifier.svg" width="80px">
                    <h5 class="mt-3">Ultrasonic humidifier</h5>
                </div>
                <div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/TV.svg" width="80px">
                    <h5 class="mt-3">Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/AC.svg" width="80px">
                    <h5 class="mt-3">Air Conditioner</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================why============================= -->

    <section id="why1" class="why-us mt-5">
        <div class="container">
            <header class="section-header">
                <h3>Why choose us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Voluptatem ratione necessitatibus ab!
                </p>
            </header>

            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">High Rating</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nam
                                aliquid deleniti omnis dolor! Illo, dolorum quod? Illum atque tenetur expedita iure
                                magni impedit, adipisci labore ad eius, dolorum laboriosam reiciendis cum?</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Best Rooms</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta neque
                                dolor nobis aliquid libero sint quaerat nemo qui porro eveniet! Possimus fuga quam
                                praesentium suscipit? Voluptatibus rem placeat quia provident obcaecati quaerat.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Friendly Prices</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque est
                                quasi fugiat expedita eveniet explicabo minima tenetur, amet nihil dolorum ad earum at
                                maxime voluptatem? Maiores minima tempore earum ab at nobis!</p>

                        </div>
                    </div>
                </div>

            </div>


        </div>

        </div>
    </section>

    <!-- ============================luxuryyyyy================================= -->

    <section class="container-fluid luxury mt-5">
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8">
                        <video autoplay muted loop id="myVideo">
                            <source src="pics\Video Of Hotel Lounge.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-4">
                        <h1>We Provide <br> you Luxury<br> and <br>comfort.<br> Colony<br> Hotels<br></h1>
                    </div>
                </div>

            </div>
            <div class="col-lg-1">

            </div>
        </div>

    </section>



    <!-- =====================================gallery=========================== -->
    <section id="gal1" class="container-fluid gallery">
        <div class="data mt-5">
            <h1>Hotel Gallery</h1>
            <h2>Some of our best</h2>
        </div>

        <div class="container-pics">
            <div class="row picg">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="pics\gal1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <img src="pics\gal2.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="pics\gal4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />
                    <img src="pics\gal3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                    <img src="pics\gal7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="pics\gal5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                    <img src="pics\gal6.jpg " class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                </div>
            </div>

        </div>
    </section>



    <!-- ============================location========================== -->

    <!-- <section class="container-fluid location mt-5">
        <div class="row ">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6 loc-con">
                <div class="col-lg-2">
                    <h1>Directions</h1>
                </div>
                <div class="col-lg-10">
                </div>
                <iframe style="border:0; border-radius: 5%; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.2719742511404!2d73.14572856895298!3d31.461703789018056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922691075c289bf%3A0xd48f8a2cd3c489f8!2sNational%20Textile%20University!5e0!3m2!1sen!2s!4v1675177900216!5m2!1sen!2s"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-3">

            </div>
        </div>
    </section> -->

    <!--===============================Footer of website========================== -->


    <section class="footer container-fluid mt-5 p-5">
        <div class="row">

            <div class="col-lg-4 mt-2 footer-info">
                <h4>Colony Hotel</h4>
                <p>Colony is a hospitality company which operates up-scale hotels and resorts in East Africa,
                    Southern Africa and South Asia.Serena comprises a collection of 36 luxury resorts, safari lodges,
                    and hotels, which are located in East Africa (Kenya, Tanzania, Rwanda, Uganda, and Mozambique) and
                    Central and South Asia (Pakistan, Afghanistan, and Tajikistan).</p>
            </div>
            <div class="col-lg-2 mt-2 footer-links">
                <h4>Our Platforms</h4>
                <div class="ft-links">
                    <ul>
                        <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i><span>
                                    &nbsp;Twitter</span></a>
                        </li>
                        <li><a href="#" class="facebook"><i class="fa-brands fa-facebook"></i><span>
                                    &nbsp;Facebook</span></a></li>
                        <li><a href="#" class="instagram"><i class="fa-brands fa-instagram"></i><span>
                                    &nbsp;Instagram</span></a></li>
                        <li><a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i><span>
                                    &nbsp;Linkedin</span></a></li>
                        <li><a href="#" class="Messenger"><i class="fa-brands fa-facebook-messenger"></i><span>
                                    &nbsp;Messenger</span></a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-2 mt-2 footer-contact">
                <h4>Contact Us</h4>
                <p>
                    National Textile University <br>
                    Lahore Road, Manawala<br>
                    Faisalabad<br>
                    <strong>Phone:</strong> +92 3085127252<br>
                    <strong>Email:</strong> NTUedu933.com<br>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="loc-con">
                    <h1>Directions</h1>

                    <iframe style="border:0; border-radius: 5%; width: 100%; height: 200px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.2719742511404!2d73.14572856895298!3d31.461703789018056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922691075c289bf%3A0xd48f8a2cd3c489f8!2sNational%20Textile%20University!5e0!3m2!1sen!2s!4v1675177900216!5m2!1sen!2s"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

    <section class="container-fluid copyright p-3">
        <div>
            <P> &copy; copyright <strong>Colony Hotel</strong> All Rights Reserved </P>
            <div class="credits">
                Created by : Colony Hotel group
            </div>
        </div>
    </section>




    <script src="smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>