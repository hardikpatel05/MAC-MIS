<?php 
	$s_sem=$_POST['sem'];

	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"MACMIS");

	$result=mysqli_query($con,"INSERT INTO tblSemester (Semester) VALUES ('$s_sem')") or die("Failed to Query Database".mysqli_error());
	//echo "Inserted Successfully...!!!";
	header("Location:AddSemester.php");
?>