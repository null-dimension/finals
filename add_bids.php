<!DOCTYPE html>
<?php 
    include 'DB.php';
	include 'header.php';

if (isset($_POST["submit"])) {
	$team = $_POST["team"];

if (isset($_POST["points"]) && is_numeric($_POST["points"])) {
    $points = $_POST["points"];

    $stmt = $conn->prepare('SELECT * FROM bids WHERE team="' . $team . '"');
    $stmt->execute();
    $result = $stmt->fetchAll();
    if($result)
    {
        $conn->exec('UPDATE bids SET points=' . $points . ' WHERE team="' . $team . '"');
    }
    else
    {
        $conn->exec("INSERT INTO bids VALUES (DEFAULT, '$team', '$points')");
    }

    

    echo '<div class="alert alert-success">New records created successfully</div>';
    echo '<script>window.location = "add_bids.php"</script>';

	
} 
else 
{
    echo '<div class="alert alert-danger">Please enter points!</div>';
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
            <h1 class="display-3 text-center">Enter Bids</h1>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <form method="post" class="form-group">
                <label>Team:</label>
                <select name="team" class="form-control">
                    <option value="team1">Team 1</option>
                    <option value="team2">Team 2</option>
                    <option value="team3">Team 3</option>
                    <option value="team4">Team 4</option>
                </select>
                <hr>
                <div class="row">
                    <div class="col">
                        <label>Points:</label>
                        <input type="number" class="form-control" name="points">
                        <br>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit Bid">
            </form>
        </div>
    </div>
    <br>
    <div class="card">
        <?php 
                $stmt = $conn->prepare('SELECT * FROM bids');
                $stmt->execute();
                $result = $stmt->fetchAll();
            ?>
        <table class="table" style="max-width: 600px;margin:0 auto;">
            <?php foreach($result as $r):?>
            <tr>
                <td scope="col">
                    <h3>
                        <?php echo $r['team']; ?>
                    </h3>
                </td>
                <td scope="col">
                    <h3>
                        <?php echo $r['points']; ?>
                    </h3>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
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