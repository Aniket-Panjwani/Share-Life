<h2> Add Hospital </h2>
<p><a href="javascript:history.go(-1)" title="Return to previous page">« Go back</a></p>
<nav align=right><a href="logout.php"> Logout</a></nav>
<?php

	if (isset($_POST['Add_hospital']))
	{
		 $db = mysqli_connect("localhost", "root", "", "blood bank management system");
		 if ($db)
		 {
		 	$a=$_POST['txt_title'];
		 	$b=$_POST['ta_description'];
		 	$c=$_FILES['file_image']['name'];
		 	$tempname=$_FILES['file_image']['tmp_name'];
		 	$folder1="img/".$c;
		 	$upload1=move_uploaded_file($tempname, $folder1);
		 	
		 	$d=$_POST['addr'];
		 	$q="INSERT INTO `hospital details`( `hospital_name`, `hospital_city`, `hospital_img`, `hospital_address`) VALUES ('$a','$b','$c','$d')";
		 	 $p=mysqli_query($db,$q);
		 	 if ($p) {
		 	 	             echo "success";

		 	 }
		 	 else{
		 	 	echo mysqli_error($db);

		 	 }

		 	
		 }
	}


?>


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Add Hospital</title>
	</head>
	<body>
		<h2>Add Hospital</h2>
		<form method="post" action="Add_hospital.php" enctype="multipart/form-data">

			<table>
				<tr>
					<td>Title</td>
					<td><input type="text" name="txt_title" required></td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
						<textarea name="ta_description"></textarea>
					</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>
						<input type="file" name="file_image">
					</td>
				</tr>
				<!--<tr>
					<td>Is this Private Hospital</td>
					<td>
						<input type="radio" name="rdo_featured" value="1">&nbsp;Yes
						<input type="radio" name="rdo_featured" value="0" checked="true">&nbsp;No
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>!-->
				<tr>
					<td>Address</td>
					<td>
					<input type="text" name="addr"></td>
				</tr>
				<tr>
					<td colspan="2"> <input type="submit" name="Add_hospital"></td>
				</tr>
			</table>
		</form>
	</body>
	</html>	
