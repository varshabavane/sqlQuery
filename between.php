<?php   include("header.html"); ?>
<div class="container">
  <h2><center><b>Employee Details</b></center></h2>
              
  <table class="table table-striped">
    <?php
              include("libs/config.php");
              $fetch_image = "SELECT * from `employee`where id BETWEEN  2 AND 7";
              $found = mysqli_query($conn, $fetch_image);
              while ($row = mysqli_fetch_array($found)) {
                $id=$row['id'];
                
                echo '<tbody>
                <tr>
                
                <td><a href="#">'.$row['id'].'</a></td>
                <td>'.$row['name'].'</td>
                <td>'.$row['city'].'</td>
                <td>'.$row['salary'].'</td>
                <td>'.$row['description'].'</td>

                
                </tr>
                </tbody>'
                ;}?>


<!--  -->