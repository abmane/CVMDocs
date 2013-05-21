<?php
	date_default_timezone_set('America/New_York');

	require_once('action/CommonAction.php'); 

	class PageChatAction extends CommonAction {
		
		public function __construct() {
			
			parent::__construct(CommonAction :: $VISIBILITY_MEMBER);
		
		}
		
		protected function executeAction() {		
			
		
		}
	}