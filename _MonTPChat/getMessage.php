<?php
	require_once('action/CommonAction.php'); 
	require_once('action/Transactions.php'); 
	
	echo Transactions::getMessage($_SESSION["key"]);