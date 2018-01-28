<!DOCTYPE html>
<html>
<?php 
include("../header.php"); 
require_once('../DB.php');
?>

<body>

  <!-- Header -->
  <div class="jumbotron jumbotron-fluid animated fadeInDown">
    <div class="container">
      <div class="card" style="border:0;">

        <?php 
                $stmt = $conn->prepare('SELECT * FROM bids');
                $stmt->execute();
                $result = $stmt->fetchAll();
            ?>
        <h2 style="text-align:center;">Bids</h2>
        <table class="table" style="max-width: 600px;margin:0 auto;">
          <tr>
            <?php foreach($result as $r):?>

            <td scope="col" style="text-align:center;">
              <h3>
                <?php echo $r['team']; ?>
              </h3>
            </td>


            <?php endforeach; ?>
          </tr>
          <tr>
            <?php foreach($result as $r):?>


            <td scope="col" style="text-align:center;">
              <h3>
                <?php echo $r['points']; ?>
              </h3>
            </td>

            <?php endforeach; ?>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="container animated fadeInUp delay">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">QUESTION</h4>
        <hr>
        <p class="card-text ">
          Question 8 of Round 3
        </p>



        <hr>
        <a href="bid_Q9.php" class="btn btn-primary btn-block">NEXT</a>
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