<!DOCTYPE html>
<html>
<?php include("../header.php"); ?>

<body>

  <!-- Header -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3 text-center animated fadeInDown">TEAM 1</h1>
    </div>
  </div>

  <!-- Content -->
  <div class="container animated fadeInUp delay">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">QUESTION</h4>
        <hr>
        <p class="card-text ">
          Question 2 of Round 2 for Team 1
        </p>
        <?php include('timer.html'); ?>
        <br>
        <hr>
        <a href="T2b.php" class="btn btn-primary btn-block">NEXT</a>
      </div>
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
    border-radius: 5px;
  }
</style>

</html>