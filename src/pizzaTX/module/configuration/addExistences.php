<?php
	ini_set("display_errors", "0");
	require __DIR__ . '\..\..\libs\smarty\Smarty.class.php';
	require __DIR__ . "\classes\class.addExistences.php";
	
	$smarty = new Smarty;
	session_start();
	$objItem = new AddExistences();
	if (array_key_exists("validated", $_SESSION) && $_SESSION["validated"] == "1") {
		/* Si se puede mostrar el contenido */
		$accion = $_POST["accion"];
		if ($accion == "") {
			include('../core/header.php');
			$pizzas = $objItem->getPizzas();
			$ingredients = $objItem->getIngredients();
			$smarty->assign("username", $_SESSION["username"]);
			$smarty->assign("pizzas", $pizzas);
			$smarty->assign("ingredients", $ingredients);
			$template = __DIR__ . '\..\..\templates\module\configuration\addExistences.tpl';
			$smarty->display($template);
		} elseif ($accion == "addPizza") {			
			$objItem->addPizza($_POST["name"], $_POST["ingredients"]);
		} elseif ($accion == "addIngredient") {
			$objItem->addIngredient($_POST["name"]);
		}
	} else {
		/* Error no se puede ver el contenido */
		echo "<h1>No tiene los permisos necesarios para ver esta p&aacute;gina.<br>
		Inicie sesi&oacute;n en la siguiente direcci&oacute;n: <a href='http://localhost/barsoft'>
		Barsoft</a></h1>";
	}
?>