<!--
*	Author:	Declan Finnerty
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW	
*
* 	Connects to the database
-->
<?php
	include 'ConnectToDB.php';

echo implode(" ",$_POST);
	//Get user details from client
	$usrName = $_POST['nameField'];
	$county = $_POST['userCounty'];
	
	//Put client details in database
	$sql = "INSERT INTO user_info (UserName, County)
	VALUES ('" . $usrName . "', '" . $county . "')";

	if ($db->query($sql) === TRUE) 
	{
	    echo "<h1>Hi " . $usrName . " you are signed in</h1>";
	    echo "<a href='index.php'>index</a>";
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $db->error;
	}

?>