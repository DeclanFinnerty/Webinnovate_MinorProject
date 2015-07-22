<!DOCTYPE HTML>

<html lang="en-us">

	<head>
		<meta charset="utf-8"/>
		<title>Leaderboard</title>

		<link rel="stylesheet" type="text/css" href="css/learderboard_style.css">

	</head>

	<body>
		<a href="index.php">index</a>

		<div class="container">

			<h1 id="leaderboardH1">Leaderboard</h1>

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