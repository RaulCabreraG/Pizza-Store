<!DOCTYPE html>
<html>
	<head>
		<style>
		body {
			margin:0;
		}

		.topnav {
  			overflow: hidden;
  			background-color: #333;
		}

		.topnav a {
  			float: left;
  			display: block;
  			color: #f2f2f2;
  			text-align: center;
  			padding: 14px 16px;
  			text-decoration: none;
  			font-size: 17px;
		}

		.topnav a:hover {
  			background-color: #ddd;
  			color: black;
		}

		.active {
  			background-color: #4CAF50;
  			color: white;
		}

		.topnav .icon {
  			display: none;
		}

		@media screen and (max-width: 750px) {
  			.topnav a:not(:first-child) {
  				display: none;
  			}

  			.topnav a.icon {
    			float: right;
    			display: block;
  			}
		}

		@media screen and (max-width: 750px) {
  			.topnav.responsive {
  				position: relative;
  			}
  			.topnav.responsive .icon {
    			position: absolute;
    			right: 0;
    			top: 0;
  			}
  			.topnav.responsive a {
    			float: none;
    			display: block;
    			text-align: left;
  			}
		}
		</style>
	</head>
	<body>
		<div class="topnav" id="myTopnav">
  			<a href="/pizzaTX/index.php" class="active">Ventas</a>
		  	<a href="/pizzaTX/module/configuration/config.php">Configuraci&oacute;n</a>
  			<a href="javascript:void(0);" style="font-size:15px;"
  			class="icon" onclick="myFunction()">&#9776;</a>
		</div><br>	

		<script>
			function myFunction()
			{
	    		var x = document.getElementById("myTopnav");
	    		if (x.className === "topnav") {
	        		x.className += " responsive";
	    		} else {
	        		x.className = "topnav";
	    		}
			}
		</script>
	</body>
</html>