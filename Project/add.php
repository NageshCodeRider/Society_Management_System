<?php
	
	include 'db_connection.php';
	$conn = OpenCon();
	
	$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
	$mname = mysqli_real_escape_string($conn, $_REQUEST['mname']);
	$fno = mysqli_real_escape_string($conn, $_REQUEST['fno']);
	$cno = mysqli_real_escape_string($conn, $_REQUEST['cno']);
 	$wname = mysqli_real_escape_string($conn, $_REQUEST['wname']);
	$sname = mysqli_real_escape_string($conn, $_REQUEST['sname']);
	$dname = mysqli_real_escape_string($conn, $_REQUEST['dname']);
	// Attempt insert query execution

	$sql = "INSERT INTO profile (member_id, member_name, wife_name,son_name,daughter_name) VALUES ('$mid', '$mname', '$wname', '$sname', '$dname')";
	if(mysqli_query($conn, $sql)){
    echo "<center><h1>Records added successfully.</h1></center>";
	echo " <a href='Member.php'>";
	echo "<input type=button value='Go to Member Page'></a>";

	} else{
	echo "<h1>Invalid Syntax</h1><br>";
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	include 'member_add.html';
}

?>