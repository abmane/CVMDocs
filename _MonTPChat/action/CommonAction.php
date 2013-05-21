<?php
	session_start();	
	require_once("action/Constants.php");
	require_once("action/DAO/Connection.php");
	
	
	abstract class CommonAction {
		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_MEMBER = 1;
		public static $VISIBILITY_MODERATOR = 2;
		public static $VISIBILITY_ADMIN = 3;
		
		public $lang = "fr"; // langue par d�faut du site
		public $translator;
	
		private $pageVisibility;
	
		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}
	
		public function execute() {
		
			if (!isset($_SESSION["lang"])) {
					$_SESSION["lang"] = $this->lang;
				}
				else {
					$lang = $_SESSION["lang"];
				}
				
				if (isset($_GET["lang"])) {
					$lang = $_GET["lang"];
					$_SESSION["lang"] = $this->lang;
			}
	
				//$this->translator = new Translator($lang);
					if (isset($_GET["logout"])) {
						session_unset();
						session_destroy();
						session_start();
					}
		
			if (!isset($_SESSION["loggedIn"])) {
				$_SESSION["loggedIn"] = CommonAction::$VISIBILITY_PUBLIC;
			}
		
			if ($_SESSION["loggedIn"] < $this->pageVisibility) {
				header("location:index.php");
				exit;
			}
			
			// execution de l'enfant...
			$this->executeAction();
			Connection::closeConnection();
		}
		
		public function getUsername() {
			$username = "Invit�";
			
			if (isset($_SESSION["username"])) {
				$username = $_SESSION["username"];
			}
			
			return $username;
		}
		
		public function isLoggedIn() {
			/*$connected = false;
			
			if ($_SESSION["loggedIn"] > CommonAction::$VISIBILITY_PUBLIC) {
				$connected = true;
			}
			
			return $connected;
			*/
			// Variance
			return $_SESSION["loggedIn"] > CommonAction::$VISIBILITY_PUBLIC;
		}
		
		
	
		protected abstract function executeAction();
	
	}