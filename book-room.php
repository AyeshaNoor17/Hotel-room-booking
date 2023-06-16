<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index-style.css">
    <link rel="stylesheet" href="rooms-style.css">
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
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script src="script.js"></script>
    <title>Home</title>
</head>

<body>
    <?php
    require_once('database.php');
    $db = new Database();
    $id = $_GET['id'];
    // $id = 1;
    $st = $db->fetchsepecic($id);
    foreach ($st as $row) {
        ?>

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

    <section class="room-form container-fluid p-5">
        <div class="row headings">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-3 ml-3">
                <h1>Colony Hotel</h1>
                <p>Please Give details to book room</p>
            </div>
            <div class="col-lg-5 ml-4">
                <img src="pics/book.png" alt="">
            </div>

        </div>
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="side-img">
                            <img src="pics\pexels-osmany-mederos-12243342.jpg" alt="">

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form action="do-book.php" method="post">
                            <div class="row mt-5">
                                <div class="col-lg-4">
                                    <label for="id">Id</label>
                                    <input class="txt" type="text" name="id" id="" value="<?php echo $row[0] ?>"
                                        placeholder="Room id" readonly>
                                </div>
                                <div class="col-lg-4">
                                    <label for="cn">Name</label>
                                    <input class="txt" type="text" name="cusname" id="cn" value="" placeholder="Name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="no">Phone</label>
                                    <input class="txt" type="text" name="phone" id="no" value="" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-4">
                                    <label for="Capacity">Capacity</label>
                                    <input type="text" name="cap" id="capacity" value="<?php echo $row[1] ?>"
                                        placeholder="capacity" readonly>
                                </div>
                                <div class="col-lg-4">
                                    <label for="days">Days</label>
                                    <input type="text" name="" id="days" placeholder="days">
                                </div>
                                <div class="col-lg-4">
                                    <label for="ppd">Price per day</label>
                                    <input type="text" name="" id="ppd" value="<?php echo $row[2] ?>"
                                        placeholder="price per day" readonly>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-lg-4">
                                    <label for="total-price">Payment</label>
                                    <input type="text" name="pay" id="total-price" placeholder="total price  ">
                                </div>
                                <div class="col-lg-4">
                                    <label for="ci">Check-In</label>
                                    <input type="date" name="date-in" id="ci" placeholder="check-in">

                                </div>
                                <div class="col-lg-4">
                                    <label for="co">Check-Out</label>
                                    <input type="date" name="date-out" id="co" placeholder="check-out">

                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-4">
                                    <input class="sub-btn" type="submit" value="Book Now">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <!-- <div class="col-lg-2">

                                                                                                            </div> -->
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <?php
    }
    ?>
</body>

</html>