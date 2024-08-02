<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<script src="C:\xampp\htdocs\Govind\Project\NGjQuery.js">
</script>
</head>
<body alink=white vlink=white link=white>
<script language="Javascript">
</script>
<table cellpadding="10" cellspacing="0">
<tr>
<font color=white>
                                                                                
<td bgcolor=purple>  <a href="Member.php" style="text-decoration:none">Member</a></td>
<td bgcolor=black>  <a href="ProfileAd.php" style="text-decoration:none">Profile</a></td>
<td bgcolor=black>  <a href="BillAd.php" style="text-decoration:none">Bills</a></td>
<td bgcolor=black>  <a  href="Login.php" style="text-decoration:none">Logout</a></td>
<td bgcolor=black style="padding-right:1200px;"></td>

</font>
</tr>
</table>


<table cellpadding="20" cellspacing="50" align=center>
<tr>
<td ><a href="member_add.html"><input type=button value="ADD MEMBER"></a></td>
<td><a href="member_update.html"><input type=button value="UPDATE MEMBER"></a></td>
<td ><a href="member_delete.html"><input type=button value="DELETE MEMBER"></a></td>
<td ><a href="view.php"><input type=button value="VIEW MEMBER"></a></td</tr>

</tr>
</table>

</body>
</html>


<?php
	
	include 'db_connection.php';
	$conn = OpenCon();
	
	
	$sql = "Select * from profile order by member_id";
	if(mysqli_query($conn, $sql)){
		echo "<center><h1>Member Details</h1></center>";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table border=1 align=center>";
			echo"<tr><th>Member ID</th><th>Member Name</th><th>Wife Name</th><th>Son Name</th><th> Daughter Name</th><th>Flats</th><th> Post</th><th>Type</th></tr>";
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["member_id"]. "</td><td>" . $row["member_name"]. "</td><td> " . $row["wife_name"]."</td><td> " . $row["son_name"]."</td><td> " . $row["daughter_name"]."</td><td> " . $row["flats"]."</td><td> " . $row["post"]."</td><td> " . $row["type"]."</td></tr>";
			}
			echo "</table>";
			} else {
				echo "0 results";
			}
		
		
	} else{	
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
				}	
	
	
?>
