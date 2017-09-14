<?php
mysql_connect("localhost","root","");
mysql_select_db("MACMIS");

$result=mysql_query("select * from tblRegisterUser") or die("Failed to Query Database".mysql_error());
//$row=mysql_fetch_array($result);
?>	
<table border="2">
  <thead>
    <tr>
      <th>UserID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Id</th>
	  <th>Password</th>
	  <th>User Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $result )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $result ) ){
          echo "<tr><td>{$row['UserId']}</td><td>{$row['UserFirstName']}</td><td>{$row['UserLastName']}</td><td>{$row['UserEmail']}</td><td>{$row['UserPassword']}</td><td>{$row['UserType']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
  

