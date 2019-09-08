<?php
ob_start();

	//include router which starts and modifies the url
	include_once("router.php");
	$router = new router();

	//include HTML header
	include_once("view/header.php");

	$router->manual("menu_main", "invoke", null);

	//start the final exam login form
	$router->invoke("login", "invoke", null);

	//include HTML footer
	include_once("view/footer.php");

ob_end_flush();
?>

