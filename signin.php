<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="signin-style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <title>Sign-Up</title>
    <!-- <link rel="shortcut icon" href="img/about-1.jpg" type="image/x-icon"> -->
</head>

<body>
    <section class="container-fluid">
        <div class="login-form">
            <div class="row">
                <div class="col-lg-6 mt-3 p-3 login-bg">
                    <div class="row login-contain">
                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-8 login">
                            <form action="do-signin.php" method="post">
                                <img class="logo-signin" src="pics\logo2.webp" alt="">
                                <h1 class="mt-3">Colony <br><span>Hotels</span></h1><br>
                                <h6>Please Login to your Account</h6><br>
                                <input class="name-input" type="text" placeholder="Username" name="uname"><br><br>
                                <input type="password" class="pass-input" name="upass" id=""
                                    placeholder="Password"><br><br>

                                <?php
                                        $id=$_GET['rid'];
                                        if($id==2){?>

                                <h6 class="text-danger">Your Password is wrong</h6>
                                <?php
                                }
                                ?>

                                <?php
                                        $id=$_GET['rid'];
                                        if($id==3){?>

                                <h6 style="color: royal-blue">Signup Successfully</h6>
                                <?php
                                }
                                ?>

                                <?php
                                        $id=$_GET['rid'];
                                        if($id==4){?>

                                <h6 class="text-danger">Account is not created !!!</h6>
                                <?php
                                }
                                ?>

                                <input class="submit-btn" type="submit" value="Log In">
                                <div class="row new-acc">
                                    <div class="col-lg-6">
                                        <p>Dont have an account?</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="create-new" type="button" value="Create new">
                                        <!-- <button class="create-new">Create new</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 data-signin">
                    <div class="reg-form mt-5 p-5">
                        <div class="row">
                            <div class="col-lg-2">

                            </div>
                            <div class="col-lg-8">
                                <form action="do-signup.php" method="post">
                                    <h1>New <span>Here</span> ?</h1><br>
                                    <h4>Please <span>Sign-up</span> to Continue</h4>
                                    <input class="reg-name" type="text" placeholder="Username" name="rname"><br><br>
                                    <input type="password" class="reg-pass" name="rpass" id=""
                                        placeholder="Password"><br><br>
                                    <input type="email" class="reg-email" name="remail" id=""
                                        placeholder="Email"><br><br>
                                    <input type="text" class="reg-num" name="rphone" id=""
                                        placeholder="Phone no"><br><br>



                                    <input class="submit-btn" type="submit" value="Sign-up">
                                </form>

                            </div>
                            <div class="col-lg-2">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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