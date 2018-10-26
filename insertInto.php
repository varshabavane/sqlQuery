<?php   include("header.html"); ?>
<div class="container">
  <h2><center><b>Employee Details</b></center></h2>
              
  <table class="table table-striped">
    <?php
              include("libs/config.php");
              $fetch_query = "INSERT INTO `orders` (customerID, city, orderID, orderDate)
VALUES ('6', 'delhi', '22', '2/6/2018');
";
              $found = mysqli_query($conn, $fetch_query);
              while ($row = mysqli_fetch_array($found)) {
                // $id=$row['id'];
                
                echo '<tbody>
                <tr>
                
                <td><a href="#">'.$row['id'].'</a></td>
              
                <td>'.$row['city'].'</td>
                <td>'.$row['orderID'].'</td>
                <td>'.$row['orderDate'].'</td>

                
                </tr>
                </tbody>'
                ;}?>


<!--  -->