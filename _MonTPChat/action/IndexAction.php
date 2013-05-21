<?php
	date_default_timezone_set('America/New_York');

	require_once('action/lib/nusoap.php'); 
	require_once('action/CommonAction.php'); 

	class IndexAction extends CommonAction {
		public $key;
		public $error;

		public function __construct() {
		}
		
		protected function executeAction() {		
			$soapClient = new nusoap_client('http://b63server.notes-de-cours.com/services.php', false);
			$this->error = $soapClient->getError();
			
			if((!empty($_POST["nomLog"]) && !empty($_POST["mdp"]))){
				if (empty($this->error)) {
					$this->key = $soapClient->call('connecter', array('nomUsager' => $_POST["nomLog"], 'motDePasse' => md5($_POST["mdp"])));
					//echo $this->key;
					if ($soapClient->fault) {
						$this->error = "(" . $soapClient->faultcode . ") " . $soapClient->faultstring;
					} 
					if($this->key == "INVALID_USERNAME_PASSWORD" || $this->key =="USER_IS_BANDED"){
						echo "Mauvaise connection! Le nom d'utilisateur ou le  mot de passe est invalide";
					}
					else{
						$_SESSION["loggedIn"] = 1;
						$_SESSION["username"] = $_POST["nomLog"];
						$_SESSION["key"] = $this->key;
						header("location:PageChat.php");
					}
				}
			}
		
		}
	}