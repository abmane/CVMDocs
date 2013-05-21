<?php
	session_start();
	
	require_once("action/Constants.php");
	require_once("action/DAO/Connection.php");

	abstract class CommonAction {
		protected static $PUBLIC = 0;
		protected static $MEMBER = 1;
		protected static $MODERATOR = 2;
		protected static $ADMIN = 3;
	
		private $pageVisibility;
	
		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}
	
		public function execute() {
			if (isset($_GET["logout"])) {
				session_unset();
				session_destroy();
				session_start();
			}
		
			if (!isset($_SESSION["role"])) {
				$_SESSION["role"] = CommonAction::$PUBLIC;
			}
		
			if ($_SESSION["role"] < $this->pageVisibility) {
				header("location:index.php");
				exit;
			}
			
			$this->executeAction();
			
			Connection::closeConnection();
		}
		
		abstract protected function executeAction();
		
		public function getName() {
			$name = null;
			
			if ($_SESSION["role"] > CommonAction::$PUBLIC) {
				$name = $_SESSION["username"];
			}
			
			return $name;
		}
		
		public function isLoggedIn() {
			return $_SESSION["role"] > CommonAction::$PUBLIC;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	