<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class IndexAction extends CommonAction {
	
		public function __construct() {
			parent::__construct(CommonAction::$PUBLIC);
		}
		
		protected function executeAction() {
			if ((isset($_POST["username"])&&(isset($_POST["password"])))) {
				
				$user = UserDAO::authenticate($_POST["username"], $_POST["password"]);
				
				if (isset($user)) {
					echo("test");
					$_SESSION["role"] = $user["VISIBILITY"];
					$_SESSION["username"] = $user["USERNAME"];
					
					header("location:acceuil.php");
					exit;
				}
				else{
					$message = "mot de passe incorrect";
					echo($message);
				}
			}
		}
	}
