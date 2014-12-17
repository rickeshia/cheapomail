<?php 

session_start();

?>

<html>
<body>
<h1>Login Here</h1>
<form method="POST" action="login.php">

	<p>Username: <input type="text" name="username" required></p>
	<p>Password: <input type="password" name="password" required></p>
	<p><input type="submit" value="Submit"></p>

</form>



</body>


</html>