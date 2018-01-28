<!DOCTYPE html>
<html>
<?php include("../header.php"); ?>
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

<body>

  <!-- Header -->
  <div class="jumbotron jumbotron-fluid animated fadeInDown">
    <div class="container">
      <h1 class="display-3 text-center">TEAM 1</h1>
    </div>
  </div>

  <!-- Content -->
  <div class="container animated fadeInUp delay">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">QUESTION</h4>
        <hr>
        <p class="card-text ">
          Question 1 of Round 1 for Team 2
        </p>
        <div class="container">
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-primary btn-block option">Option 1</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-primary btn-block option">Option 2</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-primary btn-block option answer">Option 3</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-primary btn-block option">Option 4</button>
            </div>
          </div>
        </div>
        <hr>
        <a href="T2a.php" class="btn btn-primary btn-block">NEXT</a>
        <!-- link to T2a -->
      </div>
    </div>
  </div>



</body>

</html>