<?php include '../header.php';
	include '../DB.php'; 
	$round = 3;
    $stmt = $conn->query("SELECT * FROM scoreboard WHERE rounds = '$round'"); 

	?>

<!DOCTYPE html>
<html>

<head>
    <title>Scoreboard
    </title>
</head>

<body>
<div class="jumbotron jumbotron-fluid animated fadeInDown">
    <div class="container">
        <h1 class="display-3 text-center">Bid Points</h1>
    </div>
</div>

<div class="container animated zoomIn">
    <div class="card">
        <div class="card-header">
            <h2 class="display-4">What's your bid?</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" colspan="5">Teams</th>
                        <th scope="col" colspan="5">Points</th>
                    </tr>
                </thead>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 1</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                </tr>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 1</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                </tr>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 1</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                </tr>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 1</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                </tr>

            </table>

            <hr>
            <a href="../audience/A3.php" class="btn btn-primary btn-block">Next</a>
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