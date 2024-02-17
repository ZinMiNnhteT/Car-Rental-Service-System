<!DOCTYPE html>
<html>

<?php 
include('session_client.php'); ?> 
<head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>

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
                if(isset($_SESSION['login_client'])){
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
              <li> <a href="carlist.php"> Car List </a></li>
             
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
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a href="#">History</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
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

    <div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="entercar1.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Welcome To The Online Car Service.
          <h5 style=" text-align: center; font-size: 20px;">Please fill in the information correctly.</h5></h3>
                  <br>
          <div class="form-group">
            <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Car Name " required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="car_number" name="car_number" placeholder="Car Number (Please Type)" required>
          </div>     
          <div class="form-group">
            <input type="text" class="form-control" id="aircon" name="aircon" placeholder="Aircon (Good/Bad)" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="per_day" name="per_day" placeholder="Per Day (in Kyats)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Owner Name " required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="owner_nrc" name="owner_nrc" placeholder="Owner NRC Number (Please Type)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="owner_phone" name="owner_phone" placeholder="Owner Phone Number (Please Type)" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="owner_address" name="owner_address" placeholder="Owner Address (Please Type)" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="car_oiltype" name="car_oiltype" placeholder="Oil Type (Please Type)" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="car_enginepower" name="car_enginepower" placeholder="Engine Power (Please Type)" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="car_passengeramt" name="car_passengeramt" placeholder="Passenger amount (Please Type)" >
          </div>          
          <div class="form-group">
            <input name="uploadedimage" type="file">
          </div>
           <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> Add </button>    
        </form>
      </div>
      
      
    </div>


        <!-- <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Cars </h3>
<?php
// Storing Session
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM owners WHERE car_id IN (SELECT car_id FROM carregisters WHERE admin_id='$user_check');";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="24%">Car Name</th>
        <th width="15%">Car Number </th>
        <th width="13%">Owner Name  </th>
        <th width="17%">Owner(NRC)</th>
        <th width="17%">Owner Phone</th>
        <th width="1%">Owner Address</th>
        <th width="1%">Aircon</th>
        <th width="1%">Per Day</th>
        <th width="1%">Availability</th>
        <th width="20%">Actions</th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["car_name"]; ?></td>
      <td><?php echo $row["car_number"]; ?></td>
      <td><?php echo $row["owner_name"]; ?></td>
      <td><?php echo $row["owner_nrc"]; ?></td>
      <td><?php echo $row["owner_phone"]; ?></td>
      <td><?php echo $row["owner_address"]; ?></td>
      <td><?php echo $row["aircon"]; ?></td>
      <td><?php echo $row["per_day"]; ?></td>
      <td><?php echo $row["car_availability"]; ?></td>
      <td style="display:flex;"><a href="Edit.php?car_id=<?php echo $row['car_id']?>"> <button type="button" class="btn btn-warning pull-right" style="margin:3px;">
        Edit</button></a>
        
       
        <a href="delete.php?car_id=<?php echo $row['car_id']?>"> <button type="button" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to delete?')" style="margin:3px;">
        Delete</button></a>                  
      </td>
      

    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>0 Cars available</center> </h4>
  <?php } ?>
        </form>
</div>        
        </div>
    </div> -->
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