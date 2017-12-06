<?php
	session_start();
	session_destroy();
	include_once('./libs/smarty/Smarty.class.php');
	include_once(__DIR__ . '\module\core\classes\class.index.php');
	include(__DIR__ . '\module\core\header.php');
	$smarty = new Smarty;
	$objItem = new Index();
	$data = $objItem->getPizzasInfo();
	$cheeses = $objItem->getCheeses();
	$sauces = $objItem->getSauces();
	$crusts = $objItem->getCrusts();
	$sizes = $objItem->getSizes();
	$salads = $objItem->getSalads();
	$ingredients = $objItem->getIngredients();

	$smarty->assign("data", $data);
	$smarty->assign("cheeses", $cheeses);
	$smarty->assign("sauces", $sauces);
	$smarty->assign("crusts", $crusts);
	$smarty->assign("sizes", $sizes);
	$smarty->assign("salads", $salads);
	$smarty->assign("ingredients", $ingredients);
	$smarty->display("./templates/core/index.tpl");
?>