<?php
	
	include "db_connection.php";
	$conn = OpenCon();
	
	$m1 = mysqli_real_escape_string($conn, $_REQUEST["m1"]);
	$uvalue = mysqli_real_escape_string($conn, $_REQUEST["uvalue"]);
	$mid1 = mysqli_real_escape_string($conn, $_REQUEST["mid1"]);
	
	switch($m1){
		case 'mname' : {
						$mysqli = 'UPDATE profile set member_name='.$uvalue.' where member_id='.$mid1.';';
						if(mysqli_query($conn, $mysqli)){
							echo '<center><h1>Records Updated successfully.</h1></center>';
							echo ' <a href="Member.php">';
							echo '<input type=button value="Go to Member Page"></a>';

						} else{	
								echo '<h1>Invalid Syntax</h1><br>';
								echo 'ERROR: Could not able to execute $sql. '. mysqli_error($conn);

						}		
						}
						break;	
						
	
	
		case 'wname' : {
						$sql = 'UPDATE profile set wife_name='.$uvalue.' where member_id='.$mid1.';';
						if(mysqli_query($conn, $mysqli)){
							echo '<center><h1>Records Updated successfully.</h1></center>';
							echo  '<a href="Member.php">';
							echo '<input type=button value="Go to Member Page"></a>';

						} else{	
								echo "<h1>Invalid Syntax</h1><br>";
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

						}		
						}
						break;	
		case "sname" : {
						$sql = "UPDATE profile set son_name='".$uvalue."' where member_id=".$mid1.";";
						if(mysqli_query($conn, $sql)){
							echo "<center><h1>Records Updated successfully.</h1></center>";
							echo " <a href='Member.php'>";
							echo "<input type=button value='Go to Member Page'></a>";

						} else{	
								echo "<h1>Invalid Syntax</h1><br>";
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

						}		
						}
						break;	
		case "dname" : {
						$sql = "UPDATE profile set daughter_name='".$uvalue."' where member_id=".$mid1.";";
						if(mysqli_query($conn, $sql)){
							echo "<center><h1>Records Updated successfully.</h1></center>";
							echo " <a href='Member.php'>";
							echo "<input type=button value='Go to Member Page'></a>";

						} else{	
								echo "<h1>Invalid Syntax</h1><br>";
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

						}		
						}
						break;	
						
		
		case "fno" : {
						$sql = "UPDATE profile set flat='".$uvalue."' where member_id=".$mid1.";";
						if(mysqli_query($conn, $sql)){
							echo "<center><h1>Records Updated successfully.</h1></center>";
							echo " <a href='Member.php'>";
							echo "<input type=button value='Go to Member Page'></a>";

						} else{	
								echo "<h1>Invalid Syntax</h1><br>";
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

						}		
						}
						break;	
						
	
		default : echo "Invalid Syntax!!";
	}

?>