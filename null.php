<?php   include("header.html"); ?>
<div class="container">
  <h2><center><b>Employee Details</b></center></h2>
              
  <table class="table table-striped">
    <?php
              include("libs/config.php");
              $fetch_query = "SELECT customerID,orderID,city FROM `orders`
WHERE `city` IS NULL;
;
";
              $found = mysqli_query($conn, $fetch_query);
              while ($row = mysqli_fetch_array($found)) {
                $id=$row['id'];
                
                echo '<tbody>
                <tr>
                
                <td><a href="#">'.$row['customerID'].'</a></td>
              
                <td>'.$row['orderID'].'</td>
                <td>'.$row['city'].'</td>
                

                
                </tr>
                </tbody>'
                ;}?>


<!--  -->