<?php
	
	include 'db_connection.php';
	$conn = OpenCon();
	
	$mid = mysqli_real_escape_string($conn, $_REQUEST['mid2']);
	
	$sql = "DELETE from profile where member_id='".$mid."';";
	if(mysqli_query($conn, $sql)){
		echo "<center><h1>Records Deleted successfully!!!</h1></center>";
		echo " <a href='Member.php'>";
		echo "<input type=button value='Go to Member Page'></a>";
	} else{	
			echo "<h1>Invalid Syntax</h1><br>";
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
				}	
	
	
?>