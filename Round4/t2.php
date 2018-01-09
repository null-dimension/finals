<!DOCTYPE html>
<html>
<?php include("../header.php"); ?>

<body>

  <!-- Header -->
  <div class="jumbotron jumbotron-fluid animated fadeInDown">
    <div class="container">
      <h1 class="display-3 text-center">TEAM 2</h1>
    </div>
  </div>

  <!-- Content -->
  <div class="container animated zoomIn delay">
    <div class="card">
      <div class="card-body">
        <br>
        <?php require_once('timer.html'); ?>
        <br>
        <hr>
        <a href="t3.php" class="btn btn-primary btn-block">NEXT</a>
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