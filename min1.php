<?php include("header.html"); ?>
 <div class="container">
   
   <div class="table-content table-responsive">
     <h3 align="center">Table</h3>
     <table style="width:100%" class="table table-responsive table-bordered table-active table-striped ">
       <thead>
         <tr>
           
           <th >checkbox</th>
           <th >id</th>
           <th >salary</th>
         </tr>
       </thead>
       <?php
       include("libs/config.php");
       error_reporting(0);
$query = "SELECT  MIN(salary) as salary FROM employee";
$run = mysqli_query($conn, $query);


while ($row = mysqli_fetch_array($run)) {
$min= $row['salary'];
$check ="SELECT `id` FROM employee WHERE `salary`=$min";
$verify = mysqli_query($conn, $check);

while ($row1 = mysqli_fetch_array($verify)) {
echo '
<tr>

<td><input type="checkbox" value="" name="each"></td>
<td>'.$row1['id'].'</td>

<td>'.$min.'</td>
</tr>';
}
}
?>
       </table>

     </div>
   </div>
 </body>
 </html>
