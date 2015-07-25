<!--
*	Author:	Declan Finnerty
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW	
*
* 
* 	Connects to the database
-->
<?php

	define('DB_NAME', 'minor_db');
	define('DB_USER', 'root');
	define('PASSWORD', '');
	define('DB_HOST', 'localhost');

	// this is used through the site to connect to the database
	$db = mysqli_connect(DB_HOST, DB_USER, PASSWORD, DB_NAME);

	if($db->connect_errno > 0)
	{
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}

?>