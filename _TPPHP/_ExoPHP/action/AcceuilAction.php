<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class AcceuilAction extends CommonAction {
	
		public function __construct() {
			parent::__construct(CommonAction::$MEMBER);
		}
		
		protected function executeAction() {
			
		}
	}
