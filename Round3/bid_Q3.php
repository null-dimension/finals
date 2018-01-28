<?php 
    include '../header.php';
	include '../DB.php'; 
	$round = 3;

    $conn->exec('UPDATE bids SET points=0');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Scoreboard
    </title>
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
                <h2 class="display-4">What's your bid for Question 3?</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Teams</th>
                            <th scope="col">Points</th>
                        </tr>
                    </thead>

                    <tr>
                        <td scope="col">
                            <h3>Team 1</h3>
                        </td>
                        <td scope="col">
                            <h3>0</h3>
                        </td>
                    </tr>

                    <tr>
                        <td scope="col">
                            <h3>Team 1</h3>
                        </td>
                        <td scope="col">
                            <h3>0</h3>
                        </td>
                    </tr>

                    <tr>
                        <td scope="col">
                            <h3>Team 1</h3>
                        </td>
                        <td scope="col">
                            <h3>0</h3>
                        </td>
                    </tr>

                    <tr>
                        <td scope="col">
                            <h3>Team 1</h3>
                        </td>
                        <td scope="col">
                            <h3>0</h3>
                        </td>
                    </tr>

                </table>

                <hr>
                <a href="Q3.php" class="btn btn-primary btn-block">Next</a>
            </div>
        </div>
        <br>
    </div>
    <script>
        function loadBids() {
            var tableRows =
                `
            <thead class="thead-light">
                <tr>
                    <th scope="col" >Teams</th>
                    <th scope="col" >Points</th>
                </tr>
            </thead>
            `;
            $.ajax({
                method: "GET",
                url: "/finals/api.php?bids",
                success: function (res) {
                    var data = JSON.parse(res);
                    $.each(data, function (i) {
                        tableRows +=
                            `
                            <tr>
                                <td scope="col">
                                    <h3>${data[i].team}</h3>
                                </td>
                                <td scope="col">
                                    <h3>${data[i].points}</h3>
                                </td>
                            </tr>
                        `;
                    });
                    $('.table').html(tableRows);
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
        setInterval(loadBids, 2000);
        //loadBids();
    </script>
</body>


</html>