<!DOCTYPE HTML>

<html lang="en-us">

	<head>
		<meta charset="utf-8"/>
		<title>Leaderboard</title>

		<link rel="stylesheet" type="text/css" href="css/myCSS.css">

	</head>

	<body>
		<a href="index.php">index</a>

		<h1>Display data from database</h1>

		<?php
			include 'ConnectToDB.php';

			$sqlget = "SELECT * FROM user_info ORDER BY -Score";
			$sqldata = mysqli_query($db, $sqlget) or die('Error getting data from database');

			echo "<table>";
			echo "<tr><th>ID</th><th>UserName</th><th>County</th><th>Score</th></tr>";

			while($row = mysqli_fetch_array($sqldata, MYSQL_ASSOC))
			{
				echo "<tr><td>";
				echo $row['ID'];
				echo "</td><td>";
				echo $row['UserName'];
				echo "</td><td>";
				echo $row['County'];
				echo "</td><td>";
				echo $row['Score'];
				echo "</td></tr>";

			}

			echo "</table>";
		?>

	</body>

</html>