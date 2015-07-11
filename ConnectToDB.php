<?php

	define('DB_NAME', 'minor_db');
	define('DB_USER', 'root');
	define('PASSWORD', '');
	define('DB_HOST', 'localhost');

	$db = mysqli_connect(DB_HOST, DB_USER, PASSWORD, DB_NAME);

	if($db->connect_errno > 0)
	{
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}

	/*
		$sql = "SELECT * FROM user_info;";

		if(!$result = $db->query($sql)){
		    die('There was an error running the query [' . $db->error . ']');
		}

		while($row = $result->fetch_assoc()){
		    echo implode("  ",$row) . '<br />';

		    echo $row['ID'] . '<br />';
		    echo $row['UserName'] . '<br />';
		    echo $row['County'] . '<br />';
		}

		$result->free();
	*/

?>