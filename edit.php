<?php
include_once('connection.php');
$car_id=$_GET['car_id'];
// echo $car_id;exit();
$sql = "SELECT * FROM owners WHERE car_id='$car_id'";


$result = mysqli_query($conn, $sql);
 $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update book</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            padding:100px;
        }
    </style>


</head>
<body>
<div class="container">
        <div class="row">
            <div class="col md 3"></div>
            <div class="col md 6">
 
     <form action="update.php" method="POST">
     <br style="clear: both">
       <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Want to rent your car? Give us your car details. </h3>

       

       <div class="form-group">
        <input type="hidden" name="car_id" value="<?php echo $row["car_id"] ?>">
           
          </div>     
          <div class="form-group">
            <input type="text" class="form-control" id="aircon" name="aircon" placeholder="Aircon (Good/Bad)" value="<?php echo $row["aircon"]?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="per_day" name="per_day" placeholder="Per Day (in Kyats)" value="<?php echo $row["per_day"]?>">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Owner Name " value="<?php echo $row["owner_name"]?>">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="owner_nrc" name="owner_nrc" placeholder="Owner NRC Number (Please Type)" value="<?php echo $row["owner_nrc"]?>">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="owner_phone" name="owner_phone" placeholder="Owner Phone Number (Please Type)" value="<?php echo $row["owner_phone"]?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="owner_address" name="owner_address" placeholder="Owner Address (Please Type)" value="<?php echo $row["owner_address"]?>" >
          </div>         
          
           <button type="submit" name="update" class="btn btn-primary pull-right"> Update </button>    
        </form>

      </div>
      <div class="col md 3"></div>
        </div>
    </div>
   
    
</body>
</html>

 </body>
 </html>