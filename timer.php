<script src="js/jquery.min.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<div class="badge badge-pill" id="timer"></div>

<script>
  $(function() {
    $('.question :input[type="radio"]').click(function(evt){
      console.log($(this).attr('name'));
      $(this).attr('disabled', 'disabled');
      $(this).closest('.list-group').find('input').attr('disabled', 'disabled');
      $.ajax({
        method: "POST",
        cache: false,
        data: "q=" + $(this).attr('name') + '&ans=' + $("input[name="+$(this).attr('name')+"]:checked").val() + '&team=<?php echo $_SESSION['team']; ?>',
        url: "evaluate.php",
        success: function(response){
          console.log('Success');

        },
        error: function(response){
          console.log('Error');
        }
      });

    });

    // The timer until: +seconds
	$("#timer").countdown({until: +1200, compact: true, format: 'MS', onExpiry: timeup});

	// Do something when the time is up
	function timeup(){
		alert('Time up!');
    window.location.href = "result.php";
	}
  });
</script>
