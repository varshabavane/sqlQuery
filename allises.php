<?php 	include("header.html"); ?>
<div class="container">
  <h2><center><b>Employee Details</b></center></h2>
              
  <table class="table table-striped">
    <?php
              include("libs/config.php");
              $fetch_image = "SELECT name as 'empName' FROM employee";
              $found = mysqli_query($conn, $fetch_image);
              while ($row = mysqli_fetch_array($found)) {
                 // $id=$row['empID'];
                 // $name=$row['empName'];
                
                echo '
                <tbody>
                <tr>
                
              
                <td>'.$row['empName'].'</td>
                
                
                </tr>
                </tbody>'
                ;}?>


<!--  -->