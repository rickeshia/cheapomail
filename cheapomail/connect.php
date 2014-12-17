<?php

$hostname = "localhost";

$user = "root";

$database = "Cheapomail";

$data = mysql_connect($hostname, $user, "") or die ("No Connection");

mysql_select_db($database,$data) or die ("No Connection");

?>