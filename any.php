<?php 	include("header.html"); ?>
<div class="container">
  <h2><center><b>Employee Details</b></center></h2>
              
  <table class="table table-striped">

    <?php
              include("libs/config.php");
              $fetch_query = "SELECT `city` FROM `employee` union  select city from `customerdetails` ORDER BY city";
              $found = mysqli_query($conn, $fetch_query);
              while ($row = mysqli_fetch_assoc($found)) {
                 // $id=$row['id'];
                
                echo '<tbody>
                <tr>
                 
                <td>'.$row['city'].'</td>
                
                
                </tr>
                </tbody>'
                ;}?>


<!--  -->

