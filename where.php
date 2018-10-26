<?php include("header.html"); ?> 
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
  <h2><center><b>Employee Details</b></center></h2>
              
  <table class="table table-striped">
    <?php
              include("libs/config.php");
              $fetch_image = "SELECT * from `employee` where city='mumbai' ";
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
        