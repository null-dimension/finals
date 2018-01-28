<!DOCTYPE html>
<html>
<?php include("header.php");?>

<body id="particles-js">

    <div class="jumbotron" >
      <h1 class="text-center display-3">HEllo Workd</h1>
    </div>
    <div>
    <div class="card">
      <div class="card-body">
        <div class="container">

        </div>
      </div>
    </div>
  </div>
  <script src="particles.js"></script>
  <script>
    particlesJS.load('particles-js', 'particles.json', function(){
      console.log('loaded');
    });
  </script>
</body>
<style type="text/css">
  body {
   /* background: linear-gradient(to right, #00C9FF, #92FE9D);
  */}
body{ margin:0;
  font:normal 75% Arial, Helvetica, sans-serif;
  color: rgb(129, 127, 192);
  
}
.jumbotron {
  /* position: absolute; */
  width: 100%;
  background-color: White;
  margin: 0;
}
.card {
  position: absolute;
  margin: 0;
  top: 500px;
}
canvas{
  display: block;
  /* vertical-align: bottom; */
}
  #particles-js{
  position:absolute;
  width: 100%;
  height: 100%;
  background-color: #232741;
  /* background-image: url("http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/NASA_logo.svg/1237px-NASA_logo.svg.png"); */
  background-repeat: no-repeat;
  background-size: 20%;
  background-position: 50% 50%;
  }
</style>

</html>
