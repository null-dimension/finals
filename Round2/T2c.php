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
  <div class="container animated fadeInUp delay">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">QUESTION</h4>
        <hr>
        <p class="card-text ">
          Question 3 of Round 2 for Team 2
        </p>

        <br>
        <hr>
        <a href="T3c.php" class="btn btn-primary btn-block">NEXT</a>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Answer</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h1>{Answer goes here}</h1>
        </div>
      </div>
    </div>
  </div>

  <?php include('timer.html'); ?>
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