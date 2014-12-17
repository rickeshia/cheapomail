<?php

	session_start();


	if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '')) {
		header("location: index.php");
		exit();
	};

	require_once('connect.php');
				
				$id=$_SESSION['SESS_USER_ID'];
				
				$result3 = mysql_query("SELECT * FROM user where id='$id'");
				
				$result4 = mysql_query("SELECT * FROM message where user_id='$id'");
				
				$result5 = mysql_query("SELECT * FROM message_read where reader_id='$id'");
				
				while($row3 = mysql_fetch_array($result3))
				
				{ 
				
				$fname=$row3['firstname'];
				
				$lname=$row3['lastname'];
				
				$username=$row3['username'];

				}
		
?>


<html>
<head>
<title>Profile</title>

</head>


<body >
	
	<div id="container" >
<form method="POST" action="message.php">
	<div id="div_read" name="read"   >
		<h2>Message</h2>
<?php
		

$query="SELECT body,subject,user_ID FROM message where recipient_ids=$id";

$result= mysql_query($query) or die(mysql_error());
echo '<body> ';
echo'<table border="3">','<tr>','<th> Sender</th>','<th> Subject </th>','<th> Message</th>','</tr>';


while($row3=mysql_fetch_array($result)){	

		 		$userid=$row3['user_id'];
		 		
		 		$subject=$row3['subject'];
				
				$body=$row3['body'];
				
				echo '<tr>','<td>'.$userid.'</td>','<td>'.$subject.'</td>','<td>'.$body.'</td>','</tr>';
}

 echo '</table>','<br>';
?>
		
	</div>
	
	<div id="div_send" name="send"  >
<h2>Send </h2>
		
		<p>Recipient ID:<input type="number" style="width:50px" id="recipient_ids" name="recipient_ids" required></p>
		
		<p>Subject:<input type="text" id="subject" name="subject" required ></p>
		
		<p>Body:<textarea type="text" id="body" name="body" required placeholder="Enter Message"></textarea> </p>
		<p><input type="submit"></p>

	</div> 
</form>

</div>
<a href="logout.php"><button>Log Out</button></a>




</body>



</html>
