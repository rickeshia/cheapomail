<?php 

session_start();

if(!isset ($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID'])==''){
	header("location: index.php");
	exit();
}

include ('connect.php');

?>

<html>
<head>Administrator</head>

<body>
<h1>Register New User</h1>
</form method="POST" action="register.php">
<p>First Name: <input type="text" name="firstname" id="firstname" autofocus required></p>

<p>Last Name: <input type="text" name="lastname" id="lastname"  required></p>

<p>Username: <input type="text" name="username" id="username"  required></p>

<p>First Name: <input type="password" name="password" id="password"  required></p>

<p><input type="submit" value="Submit"></p>
</form>
<a href="logout.php">Logout</a>
</body>
</html>