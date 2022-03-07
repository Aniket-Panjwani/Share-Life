<h2 >This Page is to Add Blood Bank</h2>
<p><a href="javascript:history.go(-1)" title="Return to previous page">« Go back</a></p>
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
		 	
		 	$q="INSERT INTO `blood bank details`( `blood_bank_name`, `blood_bank_city`, `blood_bank_img`, `blood_bank_address`) VALUES ('$a','$b','$c','$d')";
		 	
		 	 $p=mysqli_query($db,$q);
		 	 if ($q) {
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
		<title>Add Blood Bank</title>
	</head>
	<body>
	<nav align=right><a href="logout.php"> Logout</a></nav>
		<h2>Add Blood Bank</h2>
		<form method="post" action="Add_Blood_Bank.php" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Title</td>
					<td><input type="text" name="txt_title"></td>
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
				<tr>
					<td>Address</td>
					<td>
					<input type="text" name="addr"></td>
				</tr>
				<!--<tr>
					<td>Is this Private Blood Bank</td>
				
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>!-->
				<tr>
					<td colspan="2"><input type="submit" name="Add_hospital"></td>
				</tr>
			</table>
		</form>
		
	</body>
	</html>	
