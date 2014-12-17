<?php
//Start session
	session_start();
 
	//Include database connection details
	require_once('connect.php');


	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == 'administrator' && $password =='administrator'){
			$_SESSION['SESS_ID'] = 'administrator';
			$_SESSION['SESS_USERNAME'] = 'administrator';
			$_SESSION['SESS_PASSWORD'] = 'administrator';
		header("location: admin.php");
		exit();
	}


	//Create query
	$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result=mysql_query($query);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) != 0) {
			
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_ID'] = $member['id'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_PASSWORD'] = $member['password'];
			session_write_close();
			header("location: profiles.php");
			exit();
		}else {
			//Login failed
			
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("failed");
	}

	?>