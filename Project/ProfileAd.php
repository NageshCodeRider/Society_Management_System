<!DOCTYPE html>
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
<td bgcolor=purple>  <a href="ProfileAd.php" style="text-decoration:none">Profile</a></td>
<td bgcolor=black>  <a href="BillAd.php" style="text-decoration:none">Bills</a></td>
<td bgcolor=black>  <a  href="Login.php" style="text-decoration:none">Logout</a></td>
<td bgcolor=black style="padding-right:1200px;"></td>                 

</font>
</tr>
</table>
                                                                                
                                           
<h2 align=center> Profile Summary</h2>										  
 <table align=center>     
<tr>
<td>

<table align=center border=1 cellpadding=15>
<tr>
<td rowspan=3> <img src="p2.png" alt="img" height=200 width=200></td>
<td>Admin ID</td>
<td><?php 
session_start();
include 'db_connection.php';
$conn = OpenCon();

$user_name=$_SESSION['admin_name'];
$ql = "SELECT * FROM user_form where name='".$user_name."'";
$result1 = $conn->query($ql);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    $mid= $row["id"];
  }
}

//$mid=1001;

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["admin_id"];
  }
}
?></td>
</tr>
                                                                                
<tr>
<td>Admin name</td>
<td><?php 

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["admin_name"];
  }
}

	
?>
</td>
</tr>
                                                                                
<tr>
<td>Wife Name</td>
<td><?php 

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["wife_name"];
  }
}

	
?>
</td>
</tr>

<tr>
<td colspan=2>Son Name</td>
<td>
<?php 

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["son_name"];
  }
}

	
?></td>
</tr>

<tr>
<td colspan=2>Daughter Name</td>
<td>
<?php 

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["daughter_name"];
  }
}

	
?></td>
</tr>
<tr>
<td colspan=2>Type</td>
<td><?php 

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["type"];
  }
}
?></td>
</tr>
<tr>
<td colspan=2>Flats</td>
<td><?php 

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["flats"];
  }
}

	
?></td>
</tr>
<tr>
<td colspan=2>Post</td>
<td><?php 

$sql = "SELECT * FROM admin where admin_id=".$mid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["post"];
  }
}

	
?></td>
</tr>


</table> 
</td>
<td style="padding-right:50px; border-radius:25px"></td>
<td ><img src="h1.jpg" />
</td>
</tr>
</table>
                                                                               
</body>
</html>

