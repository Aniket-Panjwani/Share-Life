<h2>See Blood bank </h2>
<p><a href="javascript:history.go(-1)" title="Return to previous page">« Go back</a></p>

<?php
	
		 $db = mysqli_connect("localhost", "root", "", "blood bank management system");

		 $q = "SELECT * FROM `blood bank details`";
		
         echo "<table border='1'>
<tr>
<th>blood_bank_name</th>
<th>blood_bank_city</th>
<th>blood_bank_img</th>
<th>blood_bank_address</th>
</tr>";
$result = mysqli_query($db, $q);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {?>
    	<tr><td><?php echo $row["blood_bank_name"];?></td><td><?php echo $row["blood_bank_city"];?></td><td><?php echo $row["blood_bank_img"];?></td><td><?php echo $row["blood_bank_address"];?></td></tr>
    	<?php 
    }
} else {?>
    <tr><td colspan="2">0 results</td></tr>
<?php }

echo "</table>";

        echo"success";
 ?>

 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood bank management system";

// Create connection
$db = mysqli_connect("localhost", "root", "", "blood bank management system ");
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE FROM  blood bank details";

if (mysqli_query($db, $sql)) {
  echo "Record updated successfully";
} 
else
 {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($db);
?> 
