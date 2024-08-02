<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body alink=white vlink=white link=white background="b3.jpg"  >

<table cellpadding="10" cellspacing="0">
<tr>
<font color=white>
                                                                                
<td bgcolor=black>  <a href="Member.php" style="text-decoration:none">Member</a></td>
<td bgcolor=black>  <a href="ProfileAd.php" style="text-decoration:none">Profile</a></td>
<td bgcolor=purple>  <a href="BillsAd.php" style="text-decoration:none">Bills</a></td>
<td bgcolor=black>  <a  href="Login.php" style="text-decoration:none">Logout</a></td>
<td bgcolor=black style="padding-right:1200px;"></td>
                                                                                
</font>
</tr>
</table>

<br><br><form action="viewAd.php" method=get>                        
<font color=black>
Enter Member Id <input type=text name=mid><br></font>
<input type=Submit value=VIEW></form>

<table align=center>
<tr><th colspan=3><h1>Member Details</h1></th></tr>
<tr>
<td>
<font color=white>
<table align=center border=1 cellpadding="15" >
<td rowspan=3> <img src="p2.png" alt="img" height=200 width=200></td>
<td>Member ID</td>
<td><?php 
include 'db_connection.php';
$conn = OpenCon();

$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
//$mid=103;

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["member_id"];
  }
}
?></td>
</tr>
                                                                                
<tr align=center>
<td>Member Name</td>
<td><?php 

$sql = "SELECT * FROM profile where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["member_name"];
  }
}

	
?>
</td>
</tr>

                                                                                
<tr>
<td>Bill ID</td>
<td><?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["bid"];
  }
}

	
?>
</td>
</tr>

<tr>
<td colspan=2>Water Bill</td>
<td><?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["water_bill"];
  }
}

	
?>
</td>
</tr>

<tr>
<td colspan=2>Electricity Bill</td>
<td>
<?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["electricity_bill"];
  }
}

	
?></td>
</tr>

<tr>
<td colspan=2>Maintenance</td>
<td>
<?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["maintenance"];
  }
}

	
?></td>
</tr>
<tr>
<td colspan=2>Fines</td>
<td><?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["fines"];
  }
}
?></td>
</tr>
	

<tr>
<td colspan=2>Total</td>
<td><?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["water_bill"]+$row["electricity_bill"]+$row["maintenance"]+$row["fines"];
  }
}

	
?></td>
</tr>

<tr>
<td colspan=2>Amount Paid</td>
<td><?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["amt_paid"];
  }
}
?></td>
</tr>

</table>     
</td>
<td style="padding-right:80px;"></td>
<td> <img src="b1.jpg">
</td>
</tr>
</table>

</body>
</html>