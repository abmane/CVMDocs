<?php
	require_once('action/lib/nusoap.php');
	
	class Transactions{
		public static function getMembers($key){
			$soapClient = new nusoap_client('http://b63server.notes-de-cours.com/services.php', false);
			$error = $soapClient->getError();

			if (empty($error)) {
				$membres = $soapClient->call('listeDesMembres', array('clef' => $key));
				
				if ($soapClient->fault) {
					$error = "(" . $soapClient->faultcode . ") " . $soapClient->faultstring;
				}
			}
			return json_encode($membres);
		}
		
		
		public static function getMessage($key){
			$soapClient = new nusoap_client('http://b63server.notes-de-cours.com/services.php', false);
			$error = $soapClient->getError();
			
			$messages = null;
			
			if (empty($error)) {
				$messages = $soapClient->call('lireMessages', array('clef' => $key));
				
				if ($soapClient->fault) {
					$error = "(" . $soapClient->faultcode . ") " . $soapClient->faultstring;
				}
			}
			return json_encode($messages);
		}
		
		public static function envoieMessage($key,$message){
			$soapClient = new nusoap_client('http://b63server.notes-de-cours.com/services.php', false);
			$error = $soapClient->getError();
		
			
			if (empty($error)) {
				 $soapClient->call('ecrireMessage', array('clef' => $key,'message' => $message));
				
				if ($soapClient->fault) {
					$error = "(" . $soapClient->faultcode . ") " . $soapClient->faultstring;
				}
			}
			
		}
	}