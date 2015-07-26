<!--
*	Author:	Declan Finnerty
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW
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
	<link rel="stylesheet" type="text/css" href="Bootstrap3/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container-fluid">	

				<header class="bg-greenDark">
					<img src="assets/imgs/Eco-Ninja-Header.png" class="img-responsive" alt="Eco Ninja Header">
				</header>

				<nav class="topNav bg-cream">
					<div class="container-fluid">
					  <ul class="nav nav-pills navbar-right">
					    <li role="presentation" class="active"><a class="topNav" href="index.php">Home</a></li>
					    <li role="presentation"><a class="topNav" href="SignUp.html">SignUp</a></li>
					    <li role="presentation"><a class="topNav" href="#">Profile</a></li>
					    <li role="presentation"><a class="topNav" href="Quiz.html">Challenge</a></li>
					    <li role="presentation"><a class="topNav" href="Leaderboard.php">Leaderboards</a></li>
					    <li role="presentation"><a class="topNav" href="#">Blog</a></li>
					    <li role="presentation"><a class="topNav" href="#">Gallery</a></li>
					    <li role="presentation"><a class="topNav" href="#">About</a></li>
					  </ul>
				  	</div>
				</nav>

				<div class="mainContent"> 

				<!-- Hey declan. The mainContent div is where the page specific content will be located. Editing anything outside of this section could break the standard layout  elements of the site -->
				<!-- Start of content here. Edit after -->
					<div class="jumbotron mainContent">
					  	
<!--
*	Author:	Declan Finnerty
*	Assignment:	Minor	Project	–	Eco Ninja, SxSW	
*
*
* 	This file displays the leaderboard
* 	To do so this file conects to the 
* 	database and loops through id to 
* 	get and display the users info
*
* 	Its not used in this version but it is functional
-->
<!DOCTYPE HTML>

<html lang="en-us">

	<head>
		<meta charset="utf-8"/>
		<title>Leaderboard</title>


		<!-- Global stylesheet to reset page style for common starting point on each browser -->
		<link rel="stylesheet" type="text/css" href="css/GlobalDefaults.css">
		<!-- The Global.css file has styling elements shared across site e.g. header, footer, nav, headings etc -->
		<link rel="stylesheet" type="text/css" href="css/Global.css">
		<link rel="stylesheet" type="text/css" href="Bootstrap3/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/learderboard_style.css">

		<link rel="stylesheet" media="only screen and (max-width: 1000px)" type="text/css" href="css/learderboard_styleMobile.css">
		<link rel="stylesheet" media="only screen and (min-width: 1000px)" type="text/css" href="css/learderboard_style.css">

	</head>

	<body>

		<div class="container">

			<?php
				include 'ConnectToDB.php';

				$sqlget = "SELECT * FROM user_info ORDER BY -Score";
				$sqldata = mysqli_query($db, $sqlget) or die('Error getting data from database');

				echo "<table id='leaderboardTable'>";
				echo "<tr><th>ID</th><th>UserName</th><th>County</th><th>Score</th></tr>";

				$count = 0;
				while($row = mysqli_fetch_array($sqldata, MYSQL_ASSOC))
				{
					$count += 1;
					if(($count % 2) == 0) 
					{
						echo "<tr><td>";
					}
					else
					{
						echo "<tr class='altRow'><td>";
					}

					echo $row['ID'];
					echo "</td><td>";
					echo $row['UserName'];
					echo "</td><td>";
					echo $row['County'];
					echo "</td><td>";
					echo $row['Score'];
					echo "</td></tr>";

				}

				if($count == 0)
				{
					echo "<tr><td colspan='4'>Leaderboard is empty</td></tr>";
				}

				echo "</table>";

			?>
	</div>
	</body>

</html>
					</div>
				<!-- End Of content here -->
				</div>

				<footer class="bg-yellow">
					<img src="assets/imgs/ENJ_Logo.png" class="img-responsive" alt="Eco Ninja Header">
				</footer>
		</div>

		<script src="Bootstrap3/js/bootstrap.min.js"></script>	
	</body>
</html>

