<script >
	function login()
	{
		user = $("#username").val();
		pass = $("#password").val();

		$.ajax({
	        type: 'post',
	        url: '../../loginCheck.php',
	        data: {
	            accion: "checkLogin",
	            user: user,
	            pass: pass	            
	        },
	        success: function( data ) {
	            switch(data) {
	            	case "1":
	            		swal(
		  					'&Eacute;xito!',
		  					'Bienvenido ' + user,
		  					'success'
						).then(function () {
							location.href = "/pizzaTX/module/configuration/addExistences.php";
						});
	            	break;
	            	case "2":
	            		swal(
						  	'Error',
						  	'La contraseña es incorrecta.',
						  	'error'
						);
	            	break;
	            	case "3":
	            		swal(
	            			'Error',
						  	'El usuario no existe.',
						  	'error'
	            		);
	            	break;
	            	default:
	            		swal(
						  	'Error',
						  	'El usuario est&aacute; desactivado.',
						  	'error'
						);
	            	break;
	            }	            
	        }
	    });
		return false;
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>BARSOFT - Control de Bares. by. Raúl Cabrera G.</title>
	<script src="../../libs/tether/dist/js/tether.min.js"></script>
	<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
	<script src="../../libs/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../libs/sweetAlert2/dist/sweetalert2.all.min.js"></script>
</head>
</head>
<body style="background-color: black;">
	<div class="container">
		<div class="row" style="height:25%;">
		</div>
		<div class="row">
			<table width="100%">
				<tr>
					<td width="20%"></td>
					<td width="60%">
						<form method="post" accept-charset="utf-8" id="loginForm" name="loginForm" onsubmit="return login();">
							<table>
								<tr>
									<td colspan="3" align="center">
										<legend style="color: white; font-size: 30px;">
										TX - Pizza. Recepci&oacute;n de pedidos</legend><br>
									</td>
								</tr>
								<tr>
									<td align="left" style="width: 40%;" rowspan="2">
										<img src="../../templates/images/pizza.jpg" width="100%">
									</td>
									<td style="width: 5%">
									</td>
									<td align="left">
										<label for="username" style="color: white;">Username:</label><br>
										<input type="text" class="form-control" name="username" id="username" placeholder="Usuario"><br><br>
										<label for="password" style="color: white;">Password:</label><br>
										<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									</td>
								</tr>
								<tr>
									<td align="right" colspan="2">
										<button class="btn btn-info">Ingresar</button>
									</td>
								</tr>
							</table>
						</form>
						<table>
							<tr>
							</tr>
						</table>
					</td>
					<td width="20%"></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>