<?php
	require_once('action/CommonAction.php'); 
	require_once('action/Transactions.php'); 
	
	echo Transactions::envoieMessage($_SESSION["key"],$_POST["message"]);