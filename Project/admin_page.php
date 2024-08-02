<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>


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
                                                                                
<td bgcolor=purple>  <a href="Member.html" style="text-decoration:none">Member</a></td>
<td bgcolor=black>  <a href="ProfileAd.php" style="text-decoration:none">Profile</a></td>
<td bgcolor=black>  <a href="BillAd.php" style="text-decoration:none">Bills</a></td>
<td bgcolor=black>  <a  href="logout.php" style="text-decoration:none">Logout</a></td>
<td bgcolor=black style="padding-right:1200px;"></td>

</font>
</tr>
</table>

<h1>Welcome ADMIN <?php echo $_SESSION['admin_name'] ?></span></h1>
<table cellpadding="20" cellspacing="50" align=center>
<tr>
<td ><a href="member_add.html"><input type=button value="ADD MEMBER"></a></td>
<td><a href="member_update.html"><input type=button value="UPDATE MEMBER"></a></td>
<td ><a href="member_delete.html"><input type=button value="DELETE MEMBER"></a></td>
<td ><a href="view.php"><input type=button value="VIEW MEMBER"></a></td></tr>

</table>

</body>
</html>
