<!DOCTYPE html>
<?php include 'DB.php';
	include 'header.php';

if (isset($_POST["submit"])) {
	$round = $_POST["round"];

	if (!empty($_POST["team1"])) {
		$team1 = $_POST["team1"];
	
	 if (!empty($_POST["team2"])) {
	 	$team2 = $_POST["team2"];
	
	 if (!empty($_POST["team3"])) {
	 	$team3 = $_POST["team3"];

	 if (!empty($_POST["team4"])) {
	 	$team4 = $_POST["team4"];
// 	 			$query="Insert into `scoreboard`
// (teamname, points, rounds) values('Team 1', '$team1', 'Round 1')";
// 	 			$query="Insert into `scoreboard`
// (teamname, points, rounds) values('Team 2', '$team2', 'Round 1')";
// 		$query="Insert into `scoreboard`
// (teamname, points, rounds) values('Team 3', '$team3', 'Round 1')";
// 		$query="Insert into `scoreboard`
// (teamname, points, rounds) values('Team 4', '$team4', 'Round 1')";
// $con->multi_query($query);
	 	    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
    VALUES ('Team 1', '$team1', '$round')");
    $conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
    VALUES ('Team 2', '$team2', '$round')");
    $conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
    VALUES ('Team 3', '$team3', '$round')");
      $conn->exec("INSERT INTO scoreboard (teamname, points, rounds) 
    VALUES ('Team 4', '$team4', '$round')");

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
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
	<title>Score-Board</title>
</head>
<body>
	  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3 text-center">Enter Bids</h1>
  </div>
</div>
	<div class="container">
<div class="card">
<form method="post" class="form-group" action="<?php echo $_SERVER["PHP_SELF"];?>" >
	<label>Round:</label>
		<select name="round" class="form-control">
			<option value="1">Round 1</option>
			<option value="2">Round 2</option>
			<option value="3">Round 3</option>
			<option value="4">Round 4</option>
		</select> <hr>
	<div class="row">
		<div class="col">
		<label>Team 1:</label>
	<input type="number" class="form-control" name="team1">
	<br></div>
	<div class="col">
	<label>Team 2:</label>
	<input type="number" class="form-control" name="team2">
	<br></div>
	</div>
	<div class="row">
		<div class="col">
	<label>Team 3:</label>
	<input type="number" class="form-control" name="team3">
	<br></div>
	<div class="col">
	<label>Team 4:</label>
	<input type="number" class="form-control" name="team4">
	<br></div>
	</div>
	<input type="submit" class="btn btn-primary" name="submit">
</form>
</div>
</div>
</body>
<style type="text/css">
	body {
  background: linear-gradient(to right, #00C9FF , #92FE9D);
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