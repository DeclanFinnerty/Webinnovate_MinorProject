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
*
* 	This file displays the leaderboard
* 	To do so this file conects to the 
* 	database and loops through id to 
* 	get and display the users info
*
* 	Its not used in this version but it is functional
-->


	<div>

		<div class="container">

			<?php
				include 'ConnectToDB.php';

				$sqlget = "SELECT * FROM user_info ORDER BY -Score";
				$sqldata = mysqli_query($db, $sqlget) or die('Error getting data from database');

				//get the winner
				$winner = mysqli_fetch_array($sqldata, MYSQL_ASSOC);

				//Congradulate the winer in the heading
				echo "<div id='leaderboardHeading'><h2 id='leaderboardH2'> Congratulations ";
				echo $winner['UserName'] . " you are leading </h2></div>";

				//Add the headings for the table
				echo "<table id='leaderboardTable'>";
				echo "<tr><th>UserName</th><th>County</th><th>Score</th></tr>";

				$count = 0;
				do //Add the winner to the table then loop and add the rest
				{
					if ($count == 0) {
						$row = $winner;
					}

					if(($count % 2) == 0) 
					{
						echo "<tr><td>";
					}
					else
					{
						echo "<tr class='altRow'><td>";
					}

					echo $row['UserName'];
					echo "</td><td>";
					echo $row['County'];
					echo "</td><td>";
					echo $row['Score'];
					echo "</td></tr>";

					$count += 1;

				} while($row = mysqli_fetch_array($sqldata, MYSQL_ASSOC));

				if($count == 0)
				{
					echo "<tr><td colspan='4'>Leaderboard is empty</td></tr>";
				}

				echo "</table>";
				echo "<a class='mainContent' href='index.html'>Home</a>";

			?>
	</div>
	</div>

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