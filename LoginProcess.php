<?php
session_start();
$username=$_POST['user'];
$password=$_POST['pwd'];


mysql_connect("localhost","root","");
mysql_select_db("MACMIS");

$result=mysql_query("select * from tblRegisterUser where UserEmail='$username' and UserPassword='$password'") or die("Failed to Query Database".mysql_error());

$row=mysql_fetch_array($result); 
$count=mysql_num_rows($result);
if($count>=1){
	$_SESSION['is_logged_in']=true;
	$_SESSION['username']=$username;
	$_SESSION['usertype']=$row['UserType'];
	header("Location:Dashboard.php");
	
}
else{
	header("Location:login.php");
}

 
?>