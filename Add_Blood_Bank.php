<h2 >This Page is to Add Blood Bank</h2>
<?php
if($_POST)
{
	$title = $_POST['blood bank details'];
	$description = $_POST['ta_description'];

	$target_path = "uploads/";  
	$target_path = $target_path.basename( $_FILES['file_image']['name']);   
	
	//var_dump($target_path);
	//var_dump($_FILES);
	//if(move_uploaded_file($_FILES['file_image']['tmp_name'], $target_path))
	{  
		$con = mysqli_connect('localhost','root','','blood bank management system');
		$query = "INSERT INTO blood bank details(blood bank details,description,image_path) VALUES('$bloodbankdetails,'$description','$target_path')";
		//echo $query;
		$result = mysqli_query($con,$query);
		if($result === true)
			header("location:Add_Blood_Bank.php");
	else
	    echo "Sorry, file not uploaded, please try again!";  
	}

}
else
{?>
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
					<td>Is this Private Blood Bank</td>
					<td>
						<input type="radio" name="rdo_featured" value="1">&nbsp;Yes
						<input type="radio" name="rdo_featured" value="0" checked="true">&nbsp;No
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit"></td>
				</tr>
			</table>
		</form>
		
	</body>
	</html>	
<?php
}?>