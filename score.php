<!DOCTYPE html>
<?php 
	include 'DB.php';
	include 'header.php';

if (isset($_POST["submit"])) {
	$round = $_POST["round"];

	if (is_numeric($_POST["team1"])) {
		$team1 = $_POST["team1"];
	
	 if (is_numeric($_POST["team2"])) {
	 	$team2 = $_POST["team2"];
	
	 if (is_numeric($_POST["team3"])) {
	 	$team3 = $_POST["team3"];

	 if (is_numeric($_POST["team4"])) {
	 	$team4 = $_POST["team4"];

		$stmt = $conn->prepare('SELECT * FROM scoreboard WHERE rounds="' . $round . '"');
		$stmt->execute();
		$result = $stmt->fetchAll();
		// If records exists only update
		if($result)
		{
			$conn->exec("UPDATE scoreboard SET points = $team1 WHERE rounds=$round AND teamname='Team 1'");
			$conn->exec("UPDATE scoreboard SET points = $team3 WHERE rounds=$round AND teamname='Team 2'");
			$conn->exec("UPDATE scoreboard SET points = $team2 WHERE rounds=$round AND teamname='Team 3'");
			$conn->exec("UPDATE scoreboard SET points = $team4 WHERE rounds=$round AND teamname='Team 4'");
		}
		else
		{
			$conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
			VALUES ('Team 1', '$team1', '$round')");
			$conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
			VALUES ('Team 2', '$team2', '$round')");
			$conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
			VALUES ('Team 3', '$team3', '$round')");
			$conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
			VALUES ('Team 4', '$team4', '$round')");
		}

		echo "<div class='alert alert-success'>New records created successfully</div>";
	} else {
		echo "Enter a score for team 4";
	}
	} else {
		echo "Enter a score for team 3";
	}
	} else {
		echo "Enter a score for team 2";
	}
	} else {
		echo "Enter a score for team 1";
	}

	
}
 ?>
<html>

<head>
	<title>Scoreboard</title>
</head>

<body>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-3 text-center">Score Entry</h1>
		</div>
	</div>
	<div class="container">
		<div class="card">
			<form method="post" class="form-group">
				<label>Round:</label>
				<select name="round" class="form-control">
					<option value="1">Round 1</option>
					<option value="2">Round 2</option>
					<option value="3">Round 3</option>
					<option value="4">Round 4</option>
				</select>
				<hr>
				<div class="row">
					<div class="col">
						<label>Team 1:</label>
						<input type="number" class="form-control" name="team1">
						<br>
					</div>
					<div class="col">
						<label>Team 2:</label>
						<input type="number" class="form-control" name="team2">
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Team 3:</label>
						<input type="number" class="form-control" name="team3">
						<br>
					</div>
					<div class="col">
						<label>Team 4:</label>
						<input type="number" class="form-control" name="team4">
						<br>
					</div>
				</div>
				<input type="submit" class="btn btn-primary" name="submit">
			</form>
		</div>
	</div>
</body>
<style type="text/css">
	body {
		background: linear-gradient(to right, #00C9FF, #92FE9D);
	}

	.jumbotron {
		background: white;
	}

	.card {

		padding-top: 3em;
		padding-right: 3em;
		padding-left: 3em;
		padding-bottom: 2em;
		border-radius: 5px;
	}
</style>

</html>