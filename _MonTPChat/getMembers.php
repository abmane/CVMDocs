<?php
	require_once('action/CommonAction.php'); 
	require_once('action/Transactions.php'); 
	
	echo Transactions::getMembers($_SESSION["key"]);