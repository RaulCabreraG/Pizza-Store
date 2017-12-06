<?php
	$accion = $_POST["accion"];
	if ($accion == "checkLogin") {
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'txpizza');
		$sql = "SELECT user, pass, name, active
				FROM admin
				WHERE user = '" . $_POST["user"] . "';";
		$result = $mysqli->query($sql);
		$user = $result->fetch_array(MYSQLI_ASSOC);
		if (count($user) > 0) {
			if ($user["pass"] == sha1($_POST["pass"])) {
				if ($user["active"] == "Y") {
					session_start();
					session_name($user["user"]);
					$_SESSION["validated"] = 1;
					$_SESSION["username"] = $user["user"];
					/* Muestra 1 si se tuvo exito en el logueo */
					echo "1";
				} else {
					/* Muestra 4 si el usuario esta desactivado */
					echo "4";
				}
			} else {
				/* Muestra 2 si el password es incorrecto */
				echo "2";
			}
		} else {
			/* Muestra 3 si el usuario no existe */
			echo "3";
		}
	}
?>