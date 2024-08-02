<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<html>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" href="style.css">
<body >
<table cellpadding="10" cellspacing="0">
<tr>
<font color=white>
                                                                                
<!--<div class="topnav">-->
<td bgcolor=purple>  <a href="DashBoard.html" style="text-decoration:none"><font color=white>Home</font></a></td>
<td bgcolor=black>  <a href="Profile.php" style="text-decoration:none"><font color=white>Profile</font></a></td>
<td bgcolor=black>  <a class="active" href="Bills.php" style="text-decoration:none"><font color=white>Bills</font></a></td>
<td bgcolor=black>  <a href="logout.php" style="text-decoration:none"><font color=white>Logout</font></a></td>
<td bgcolor=black style="padding-right:1200px;"></td>
<!--</div>-->
</font>
</tr>
</table>                                                                             
<font color=red>
<a href="Notice.php"><marquee scrollamount=15 behavior="alternate"><h1>****Notices****</h1></marquee></a></font>
<h2>Welcome <font color=red>
<?php
include 'db_connection.php';
$conn = OpenCon();
$mid=105;

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

<div class="w3-container w3-teal">
  <marquee scrollamount=12><h1> Image Gallery</h1></marquee>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="s3.jpg" width=400 height=250>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="s1.jpg" width=400 height=250>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="s2.png" width=400 height=250 align=center>
    </div>
  </div>
</div><br>
<br>
<div class="w3-container w3-black">
  <h3 align=center> Conatct Us</h3>
  <h5>Address: Sector 6, Yashwantnagar, Spine City, Pune
<br>Contact No: 98256XXXXX
<br>Tel: 020-236XXX
<br>mail: housingsoc@sms.com
<br></h5>
</div>

</body>
</html>