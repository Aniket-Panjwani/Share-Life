<h2>See Hospital </h2>
<p><a href="javascript:history.go(-1)" title="Return to previous page">« Go back</a></p>
<?php

	
		 $db = mysqli_connect("localhost", "root", "", "blood bank management system");

		 $q = "SELECT * FROM `hospital details`";
		

         echo "<table border='1'>
<tr>
<th>hospital_name</th>
<th>hospital_city</th>
<th>hospital_img</th>
<th>hospital_address</th>


</tr>";
$result = mysqli_query($db, $q);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {?>
    	<tr><td><?php echo $row["hospital_name"];?></td><td><?php echo $row["hospital_city"];?></td><td><?php echo $row["hospital_img"];?></td><td><?php echo $row["hospital_address"];?></td></tr>
    	<?php 
    }
} else {?>
    <tr><td colspan="2">0 results</td></tr>
<?php }

echo "</table>";


        echo"success";
 

?>