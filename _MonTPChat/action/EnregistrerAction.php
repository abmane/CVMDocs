<?php
	date_default_timezone_set('America/New_York');

	require_once('action/lib/nusoap.php'); 
	
	require_once('action/CommonAction.php'); 

	class EnregistrerAction extends CommonAction {
		public $key;
		public $error;

		public function __construct() {
		parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
	protected function executeAction() {		
				echo "mane1";
			if(!empty($_POST["matricule"]) && !empty($_POST["nom"])&& !empty($_POST["prenom"])&& !empty($_POST["nomUsager"])&& !empty($_POST["mdp"]))
			{
				$soapClient = new nusoap_client('http://b63server.notes-de-cours.com/services.php', false);
				$this->error = $soapClient->getError();
				echo "mane";
				if (empty($this->error)) {
				echo "abou";
					$this->key = $soapClient->call('enregistrer', array('matricule' => $_POST["matricule"], 'prenom' => $_POST["prenom"],'nom' => $_POST["nom"], 'nomUsager' => $_POST["nomUsager"], 'motDePasse' => md5($_POST["mdp"])));
					echo $this->key;
					
					if ($soapClient->fault) {
					echo "bacr";
						$this->error = "(" . $soapClient->faultcode . ") " . $soapClient->faultstring;
					} 
				}
			}
		
		}
	}