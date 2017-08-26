<?php
	require "include/smarty-3.1.30/libs/Smarty.class.php";
	
	$smarty= new Smarty;
	//$smarty->assign('body',display('home.tpl'));
	$smarty->display('index.tpl');
?>