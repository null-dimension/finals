<!DOCTYPE html>
<html>
<?php include("../header.php"); ?>

<body>

  <!-- Header -->
  <div class="jumbotron jumbotron-fluid animated fadeInDown">
    <div class="container">
      <h1 class="display-3 text-center">TEAM 4</h1>
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
        <a href="../audience/A4.php" class="btn btn-primary btn-block">NEXT</a>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="timeupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLongTitle">Time's up!</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

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