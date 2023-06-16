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
    <title>Home</title>
</head>

<body>
    <?php
    require_once('database.php');
    $db = new Database();
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
                        <a class="nav-link" href="#team1">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why1">Why-Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gal1">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php">Book Room</a>
                    </li>

                    <li class="nav-item ml-2" id="booktable">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="room-table container-fluid p-5">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="table-con col-lg-8">
                <h1>Available Rooms</h1>
                <div class="table-responsive">
                    <table class="table">
                        <tr class="">
                            <th>Room Id</th>
                            <th>Room Capcity</th>
                            <th>Room Area</th>
                            <th>Booked</th>
                            <th>Price per Day</th>
                            <th>Book Room</th>
                        </tr>

                        <?php
                        $st = $db->fetchrooms();
                        foreach ($st as $row) {
                            print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>");
                            print("<a href=\"do-del.php?id=$row[0]\"class=\"delb btn btn-danger\">Del Room</a>");
                            print('</tr>');
                        }
                        ?>
                    </table>

                </div>
            </div>
            <div class="col-lg-2">

            </div>

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
</body>

</html>