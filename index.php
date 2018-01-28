<!DOCTYPE html>
<html>
<?php include("header.php");?>

<body id="particles-js">
  <!-- Header -->
  <div class="jumbotron jumbotron-fluid animated fadeInDown">
    <div class="container">
      <h1 class="display-3 text-center"><span id="text1">METEOR</span> <span id="text2">MASH</span></h1>
      <h3 class="text-center">Welcome to the final round of IT Quiz!</h3>
    </div>
  </div>
      <div > </div>
      <!-- Content -->
            <div class="container animated fadeInRight">
              <div class="card">
               <div class="card-body">
                <h4 class="card-title text-center">THE FINAL ROUND</h4>
                <hr>
                <p class="card-text text-center">WELCOME TO THE FINAL ROUND OF THIS EVENT!</p>
                <hr>
                <a href="R1.php" class="btn btn-primary btn-block">LET'S GO</a>
              </div>
            </div>
  </div>
  <script src="particles.js"></script>
  <script>
    particlesJS.load('particles-js', 'particles.json', function(){
      console.log('loaded');
    });
  </script>
  <script>
  $('#text1').animateCss('bounce');
  </script>
</body>
<style type="text/css">
  body {
   margin: 0;
   }

  .jumbotron {
    background: white;
    margin: 0;
    position: absolute;
    width: 100%;
    padding: 2em;
  }

  .card {
    border-radius: 5px;
    align-items: center;
    padding: 2em;
    position:absolute;
    top:300px;
    /* left:50px; */
      margin-left: 25%;
      margin-right: 20%;
      border-radius: 1em;
      opacity: 0.8;
  }
  #particles-js{
  position:absolute;
  width: 100%;
  height: 100%;
  background-color: #242631;
  background-repeat: no-repeat;
  background-size: 20%;
  background-position: 50% 50%;
  }
</style>

</html>
