<?php  include("header.html"); ?>
<div class="container">
  <h2><center><b>Employee Details</b></center></h2>
              
  <table class="table table-striped">

    <?php
              include("libs/config.php");
              $fetch_query = "SELECT `city` FROM `orders`where EXISTS (SELECT `custname` from `customerDetails` where `customerID`=`orders.customerID` AND `custname`=`varsha`) ";
              $found = mysqli_query($conn, $fetch_query);
              while ($row = mysqli_fetch_array($found)) {
                 // $id=$row['id'];
                
                echo '<tbody>
                <tr>

                 <td>'.$row['custname'].'</td>

                
                
                </tr>
                </tbody>'
                ;}?>


<!--  -->