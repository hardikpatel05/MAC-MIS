<select class="form-control" id="form-field-select-1">
<?php 
															
																$con=mysqli_connect("localhost","root","");
																mysqli_select_db($con,"MACMIS");
																$sql = mysqli_query($con, "SELECT Semester FROM tblSemester");
																
																while ($row = $sql->fetch_assoc()){
																	echo "<option value=\"owner1\">" . $row['Semester'] . "</option>";
																}
																
															?>
</select>