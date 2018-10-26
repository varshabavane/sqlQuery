<?php include("libs/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">

  
    
    <table class="table table-responsive table-striped table-active table-bordered" style="margin-top: 50px;">
      <caption><h3 align="center">Join</h3> </caption>
      <thead>
        <tr>
          <th><input type="checkbox" value="" name="delete_all"></th>
          <th>Id</th>
          <th>Customer Name</th>
          <th>Contact Name</th>
          <th>Country</th>
          <th>OrderDate</th>
        </tr>
      </thead>
      <tbody>


<?php include("header.html"); ?>

        <?php 
        include("libs/config.php");
        error_reporting(0);
        $query = "SELECT * FROM `orders` JOIN `customerdetails` ON `orders`.`customerID` = `customerdetails`.`customerID` ";
        $run = mysqli_query($conn, $query);

        while ($row1 = mysqli_fetch_assoc($run)) {


          echo "<pre>";
                     print_r($row1);
          echo "</pre>";

          echo '
          <tr>
          <td><input type="checkbox" value="" name="each"></td>
          <td>'.$row1['customerID'].'</td>
          <td>'.$row1['custname'].'</td>
          <td>'.$row1['contactName'].'</td>
          <td>'.$row1['city'].'</td>
          
          <td>'.$row1['orderDate'].'</td>
          </tr>';
        };
        ?>



        
      </tbody>
    </table>
  </div>

</body>
</html>


