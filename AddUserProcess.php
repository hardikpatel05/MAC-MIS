<?php

$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$u_name=$_POST['uname'];
$p_wd=$_POST['pwd'];
$user_type=$_POST['userType'];

mysql_connect("localhost","root","");
mysql_select_db("MACMIS");

$result=mysql_query("INSERT INTO tblRegisterUser (UserFirstName,UserLastName,UserEmail,UserPassword,UserType) VALUES ('$f_name','$l_name','$u_name','$p_wd','$user_type')") or die("Failed to Query Database".mysql_error());
echo "Inserted Successfully...!!!";

?>