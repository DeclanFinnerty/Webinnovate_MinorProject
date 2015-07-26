<!--
*	Author:	Declan Finnerty
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW	
*
* 	This script gets the data from the 
* 	quiz and uses it to callculate the 
* 	score, it then updates the database
-->
<?php
	include 'ConnectToDB.php';

	//Get user details from client
	$usrDetails = $_POST;
	$usrName = $_POST['userName'];

	//Calculate score
	$score = 0;
	foreach ($usrDetails as $val) 
	{
		if ($val == "true")
		{
    		$score = $score + 10;
		}
	}


	//Update score in database
	$sql = "UPDATE user_info SET Score=" . $score . " WHERE UserName='" . $usrName . "'";


	if ($db->query($sql) === TRUE) 
	{

		/* Import the style sheets */
		echo '<!-- Global stylesheet to reset page style for common starting point on each browser -->
		<link rel="stylesheet" type="text/css" href="css/GlobalDefaults.css">
		<!-- The Global.css file has styling elements shared across site e.g. header, footer, nav, headings etc -->
		<link rel="stylesheet" type="text/css" href="css/Global.css">
		<link rel="stylesheet" type="text/css" href="Bootstrap3/css/bootstrap.min.css">';

	    echo "<h1>Your score is: " . $score . "</h1>";
	    echo "<a href='index.php'>index</a>";
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $db->error;
	}

?>