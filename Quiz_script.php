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
	    echo "New record created successfully";
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $db->error;
	}

?>