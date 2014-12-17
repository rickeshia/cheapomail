<?php

session_cache_expire();

session_destroy();

header('location: index.php?remarks=Logged out');

?>