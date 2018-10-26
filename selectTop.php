<?php   include("header.html"); ?>
<div class="container">
  <h2><center><b>selectTop</b></center></h2>
              
  <!-- <table class="table table-striped"> -->
    <?php
              include("libs/config.php");
              $query =' SELECT TOP `3` * FROM `employee`';
              $found = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($found)) {
                 $id=$row['id'];
                
                 echo '<tbody>
                <tr>
                
                <td><a href="#">'.$row['id'].'</a></td>
                <td>'.$row['name'].'</td>
                <td>'.$row['city'].'</td>
                <td>'.$row['description'].'</td>
                <td>'.$row['salary'].'</td>
                

                
                </tr>
                </tbody>'

                ;}
                ?>


<!--  -->