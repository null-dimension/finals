<?php include '../header.php';
	include '../DB.php'; 
	$round = 4;
    $stmt = $conn->query("SELECT * FROM scoreboard WHERE rounds = '$round'"); 

	?>

<!DOCTYPE html>
<html>

<head>
	<title>Scoreboard
	</title>
</head>

<body>
	<div class="jumbotron jumbotron-fluid animated slideInDown">
		<div class="container">
			<h1 class="display-3 text-center">Scoreboard</h1>
		</div>
	</div>

	<div class="container animated bounceInRight">
		<div class="card">
			<div class="card-header">
				<h2 class="display-4">Scores of Round 4</h2>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead class="thead-light">
						<tr>
							<th scope="col" colspan="5">Teams</th>
							<th scope="col" colspan="5">Points</th>
						</tr>
					</thead>
					<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 ?>
						<tr>
							<td scope="col" colspan="5">
								<h3>
									<?php echo $row['teamname']; ?>
							</td>
							</h3>
							<td scope="col" colspan="5">
								<h3>
									<?php echo $row['points']; ?>
							</td>
							</h3>
						</tr>
						<?php }
 ?>
				</table>
				<?php echo $row['points']; ?>
				<hr>
				<a href="../end.php" class="btn btn-primary btn-block">Next</a>
			</div>
		</div>
		<br>
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
		text-align: center;
		border-radius: 10px;
	}

	table {
		border: 2px;
	}
</style>

</html>