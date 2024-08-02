<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body alink=white vlink=white link=white background="b3.jpg"  >
<table cellpadding="10" cellspacing="0">
<tr>
<font color=white>
                                                                                
<!--<div class="topnav">-->
<td bgcolor=black>  <a href="DashBoard.php" style="text-decoration:none">Home</a></td>
<td bgcolor=black>  <a href="Profile.php" style="text-decoration:none">Profile</a></td>
<td bgcolor=purple>  <a class="active" href="Bills.php" style="text-decoration:none">Bills</a></td>
<td bgcolor=black>  <a href="login.php" style="text-decoration:none">Logout</a></td>
<td bgcolor=black style="padding-right:1200px;"></td>
<!--</div>-->
</font>
</tr>
</table>

<h2> Welcome <font color=red>
<?php
session_start();
include 'db_connection.php';
$conn = OpenCon();
$user_name=$_SESSION['user_name'];
$ql = "SELECT * FROM user_form where name='".$user_name."'";
$result1 = $conn->query($ql);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    $mid= $row["id"];
  }
}

//$mid=103;

$sql = "SELECT * FROM profile where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["member_name"];
  }
}
?>
!!</font></h2>
<hr color=red  width=75% align=left>
<h2 align=center> Your bills have been summarised below...</h2>
<table align=center>
<tr>
<td>
<font color=white>
<table align=center border=1 cellpadding="15" >
<td rowspan=3> <img src="p2.png" alt="img" height=200 width=200></td>
<td>Member ID</td>
<td><?php 

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
<td>Water Bill</td>
<td><?php 

$sql = "SELECT * FROM bill where member_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row['water_bill'];
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
    echo $row['electricity_bill'];
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
    echo $row['maintenance'];
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
    echo $row['fines'];
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
    echo $row['water_bill']+$row['electricity_bill']+$row['maintenance']+$row['fines'];
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
