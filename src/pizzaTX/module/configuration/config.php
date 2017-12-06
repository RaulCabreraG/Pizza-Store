<?php
	session_start();
	session_destroy();
	include_once(__DIR__ . '\..\..\libs\smarty\Smarty.class.php');
	include(__DIR__ . '\..\..\module\core\header.php');
	$smarty = new Smarty;
	$smarty->display(__DIR__ . '\..\..\templates\core\login.tpl');
?>