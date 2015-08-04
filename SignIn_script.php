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
	<!--<link rel="stylesheet" type="text/css" href="css/GlobalDefaults.css"-->
	<!-- The Global.css file has styling elements shared across site e.g. header, footer, nav, headings etc -->
	<link rel="stylesheet" type="text/css" href="css/Global.css">
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

				<div class="mainContent"> 
				<!-- Start of content here. Edit after -->
									
<!--
*	Author:	Declan Finnerty
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW	
*
* 	Connects to the database
-->
<?php
	include 'ConnectToDB.php';

	//Get user details from client
	$usrName = $_POST['inputName1'];
	$county = $_POST['inputCounty4'];
	
	//Put client details in database
	$sql = "INSERT INTO user_info (UserName, County)
	VALUES ('" . $usrName . "', '" . $county . "')";

	if ($db->query($sql) === TRUE) 
	{
		echo "<div class='container'>";
	    echo "<h1>Hi " . $usrName . " you are signed in</h1>";
	    echo "<a class='mainContent' href='quiz.html'>Try the Quiz!</a>";
		echo "</div>";
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $db->error;
	}

?>

				<!-- End Of main content here -->
				</div>

				<footer class="bg-yellow">
					<img src="assets/imgs/ENJ_Logo.png" class="img-responsive" alt="Eco Ninja Header">
				</footer>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="Bootstrap3/js/bootstrap.min.js"></script>	

	</body>
</html>