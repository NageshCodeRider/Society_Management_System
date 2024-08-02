<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $password="";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser,$password,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
