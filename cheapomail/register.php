<?php
session_start();

include('connect.php');

$fname=$_POST['firstname'];

$lname=$_POST['lastname'];

$uname=$_POST['username'];

$pword=$_POST['password'];

mysql_query("INSERT INTO user (firstname, lastname, password, username) VALUES ('$fname', '$lname', '$pword', '$uname')");

header("location: admin.php");

?>
