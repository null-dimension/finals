<!DOCTYPE html>
<html>
<head>
	<title>Loading page</title>
	<style type="text/css">
		body {
			background: #2b2b2b;
			margin: 0;
			padding: 0;

		}
		.loader {
			height: 40px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translateX(-50%) translateY(-50%);
		}
		.loader span {
			font-family: arial;
			font-size: 75px;
			color: rgba(255,255,255,.1);
			display: inline-block;
			transition: all .5s;
			animation: animate 2s infinite;
		}
		.loader span:nth-child(1) {
			animation-delay: .1s;
		}
		.loader span:nth-child(2) {
			animation-delay: .2s;
		}
		.loader span:nth-child(3) {
			animation-delay: .3s;
		}
		.loader span:nth-child(4) {
			animation-delay: .4s;
		}
		.loader span:nth-child(5) {
			animation-delay: .5s;
		}
		.loader span:nth-child(6) {
			animation-delay: .6s;
		}
		.loader span:nth-child(7) {
			animation-delay: .7s;
		}
		@keyframes animate {
			0% {
				color: rgba(255,255,255,.1);
				transform: translateY(0);
				margin-left: 0;
			}
			25% {
				color: yellow;
				transform: translateY(-15px);
				margin-left: 10px;
				text-shadow: 0 15px 15px rgba(0,0,0,1);
			}
			100% {
				color: rgba(255,255,255,.1);
				transform: translateY(0);
				
			}
		}
		@keyframes fadeout {
			from {
				opacity: 1;
			}
			to {
				opacity: 0;
			}
		}
	</style>
</head>
<body>
	<div class="container loader" id="preload">
		<span>L</span>
		<span>O</span>
		<span>A</span>
		<span>D</span>
		<span>I</span>
		<span>N</span>
		<span>G</span>
	</div>
	<script type="text/javascript">
		(function() {

			var preload = document.getElementById('preload');
			var loading = 0;
			var id = setInterval(frame, 64);

			function frame() {
				if (loading == 100) {
					clearInterval(id);
					window.open("index.html", "_self");
				} else {
					loading = loading +1;
					if(loading == ) {
						preload.style.animation = "fadeout 1s easy"
					}
				}
			}

		})();
	</script>
</body>
</html>