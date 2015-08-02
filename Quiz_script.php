<!--
*	Author: Declan Finnerty and	Robert Hunter
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW
*	Date	:	12/07/15
*	Ref:	
-->
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
	<title>Econ Ninja template</title>
	<!-- Global stylesheet to reset page style for common starting point on each browser -->
	<link rel="stylesheet" type="text/css" href="css/GlobalDefaults.css">
	<!-- The Global.css file has styling elements shared across site e.g. header, footer, nav, headings etc -->
	<link rel="stylesheet" type="text/css" href="css/Global.css">
	<!-- Styling for registration -->
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap3/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="css/learderboard_style.css">

		<link rel="stylesheet" media="only screen and (max-width: 700px)" type="text/css" href="css/learderboard_styleMobile.css">
		<link rel="stylesheet" media="only screen and (min-width: 700px)" type="text/css" href="css/learderboard_style.css">
		
	</head>
	<body>
		<div class="container-fluid">	

				<header class="bg-greenDark">
					
				</header>
	<div class="navbar navbar-default">
				    <div class="container-fluid bg-cream">

				      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				      <div class="navbar-header">
					       	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				              <span class="sr-only">Toggle navigation</span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
	            			</button>
	            		</div>
				  	

				  		<div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
					             <li role="presentation">
							    	<a class="topNav" href="index.html">Home</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="registration.html">Profile</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="quiz.html">Challenge</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="Leaderboard.php">Leaderboards</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="#">Blog</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="#">Gallery</a>
							    </li>
							    <li role="presentation">
							    	<a class="topNav" href="#">About</a>
							    </li>
				          </ul>
				        </div>			  
				
				  </div> <!-- Close nav collapse -->
				</div>	 <!-- Close container fluid -->

				<div class="mainContent container-fluid"> 
				<!-- Start of context sensitive content here. Edit after this line -->
				
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


		echo "<div class='container'>";
		if($usrName != "null")
		{//the user has signed in
		    echo "<h1>Hi ". $usrName . ", your score is: " . $score . "</h1>";
		    echo "<a class='mainContent' href='Leaderboard.php'>Leaderboard</a>";
		}
		else
		{
		    echo "<h1>You need to create a profile before you can get a score.</h1>";
		    echo "<a class='mainContent' href='registration.html'>Profile</a>";
		}
		echo "</div>";
	}
	else
	{
	    echo "Error: " . $sql . "<br>" . $db->error;
	}

?>

				<!-- End Of context sensitive content here. -->
				</div>

				<footer class="bg-yellow">
					<img src="assets/imgs/ENJ_Logo.png" class="img-responsive" alt="Eco Ninja Header">
				</footer>
		</div>

		<script src="Bootstrap3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
		<script>
		// Enter any javascript here

		</script>

	</body>
</html>