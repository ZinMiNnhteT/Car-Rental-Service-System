<html>

<head>
    <title> Car Rental Service System </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
</head>

<link rel="stylesheet" type="text/css" href="assets/css/manager_registered_success.css">
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<body>

    <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                    Online Car Rental Service System </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
            if (isset($_SESSION['login_client'])) {
            ?>
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                        </li>
                        <li>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Admin Control <span class="caret"></span> </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="entercar.php">Add </a></li>
                                        <li> <a href="enterdriver.php"> Update </a></li>
                                        <li> <a href="enterdriver.php"> Delete </a></li>
                                        <li> <a href="clientview.php">View</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        </li>
                    </ul>
                </div>

            <?php
            } else if (isset($_SESSION['login_customer'])) {
            ?>
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                        </li>
                        <ul class="nav navbar-nav">
                            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="prereturncar.php">Return Now</a></li>
                                    <li> <a href="mybookings.php"> My Bookings</a></li>
                                </ul>
                            </li>
                        </ul>
                        <li>
                            <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        </li>
                    </ul>
                </div>

            <?php
            } else {
            ?>

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="clientlogin.php">Admin</a>
                        </li>
                        <li>
                            <a href="customerlogin.php">User</a>
                        </li>
                        <li>
                            <a href="#"> System Information </a>
                        </li>
                    </ul>
                </div>
            <?php   }
            ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php

    require 'connection.php';
    // $conn = Connect();

    $admin_name = $conn->real_escape_string($_POST['admin_name']);
    $admin_id = $conn->real_escape_string($_POST['admin_id']);
    $admin_email = $conn->real_escape_string($_POST['admin_email']);
    $admin_phone = $conn->real_escape_string($_POST['admin_phone']);
    $admin_address = $conn->real_escape_string($_POST['admin_address']);
    $admin_password = $conn->real_escape_string($_POST['admin_password']);

    $query = "INSERT into admins(admin_name,admin_id,admin_email,admin_phone,admin_address,admin_password) VALUES('" . $admin_name . "','" . $admin_id . "','" . $admin_email . "','" . $admin_phone . "','" . $admin_address . "','" . $admin_password . "')";
    $success = $conn->query($query);

    if (!$success) {
        die("Couldnt enter data: " . $conn->error);
    }

    $conn->close();

    ?>


    <div class="container">
        <div class="jumbotron" style="text-align: center;">
            <h2> <?php echo "Welcome $admin_name!" ?> </h2>
            <h1>Your account has been created.</h1>
            <p>Login Now from <a href="clientlogin.php">HERE</a></p>
        </div>
    </div>

</body>
<footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5>© Online Car Rental Service</h5>
            </div>
        </div>
    </div>
</footer>

</html>