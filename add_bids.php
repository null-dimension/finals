<?php 
    include 'header.php';
	include 'DB.php'; 

?>

<!DOCTYPE html>
<html>

<head>
    <title>Score-Board
    </title>
</head>
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
<body>
<div class="jumbotron jumbotron-fluid animated fadeInDown">
    <div class="container">
        <h1 class="display-3 text-center">Bid Points</h1>
    </div>
</div>

<div class="container animated zoomIn">
    <div class="card">
        <div class="card-header">
            <h2 class="display-4">Enter bid points</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" colspan="5">Teams</th>
                        <th scope="col" colspan="5">Points</th>
                        <th scope="col" colspan="5">Modify</th>
                    </tr>
                </thead>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 1</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                    <td>
                        <div class="input-group">
                        <input type="number" class="form-control form-inline" style="max-width: 400px;">
                        <span class="input-group-btn"><button id="team1-add" class="btn btn-success bid-add team1">Add</button></span>
                        <span class="input-group-btn"><button class="btn btn-danger team1">Subtract</button></span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 2</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                    <td>
                        <div class="input-group">
                        <input type="number" class="form-control form-inline" style="max-width: 400px;">
                        <span class="input-group-btn"><button id="team2-add" class="btn btn-success  bid-add team2">Add</button></span>
                        <span class="input-group-btn"><button class="btn btn-danger team2">Subtract</button></span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 3</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                    <td>
                        <div class="input-group">
                        <input type="number" class="form-control form-inline" style="max-width: 400px;">
                        <span class="input-group-btn"><button id="team3-add" class="btn btn-success  bid-add team3">Add</button></span>
                        <span class="input-group-btn"><button class="btn btn-danger team3">Subtract</button></span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td scope="col" colspan="5">
                        <h3>Team 4</h3>
                    </td>
                    <td scope="col" colspan="5">
                        <h3>13</h3>
                    </td>
                    <td>
                        <div class="input-group">
                        <input type="number" class="form-control form-inline" style="max-width: 400px;">
                        <span class="input-group-btn"><button id="team4-add" class="btn btn-success  bid-add team4">Add</button></span>
                        <span class="input-group-btn"><button class="btn btn-danger team4">Subtract</button></span>
                        </div>
                    </td>
                </tr>

            </table>

        </div>
    </div>
    <br>
</div>
<script>
    /*
    $('.bid-add').on('click', function(){
        $.ajax({
        method: 'GET',
        url: 'api.php?bids',
        success: function(data){
            alert(data);
        },
        error: function(err){
            alert(err);
        }
    });
    });*
    /*
    $('.bid-add').click(function(e){
        console.log($(this)[0].id);
     
    });
    */

    $('#team1-add').click(function(){
        $.ajax({
            method: 'GET',
            url: `api.php?add_bid&team=team1&points=${$('#team1-add').closest('input').val()}`,
            success: function(data){
                console.log(data);
            },
            error: function(err){
                console.log(err);
            }
        });
    });
</script>
</body>
</html>