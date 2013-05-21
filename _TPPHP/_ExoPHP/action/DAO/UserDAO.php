<?php


	class UserDAO {
	
		public static function authenticate($username, $password) {
			$connection = Connection::getConnection();
			
			
			$password = sha1($password+DB_SALE);
			
			$query = "SELECT * FROM USERS WHERE USERNAME = :pUsername AND PASSWORD = :pPassword" ;
			$statement = oci_parse($connection, $query);
			
			oci_bind_by_name($statement, ":pUsername", $username);
			oci_bind_by_name($statement, ":pPassword", $password);
			
			oci_execute($statement);
			
			$result = null;
			
			if ($row = oci_fetch_array($statement)) {
				$result = $row;
				var_dump($row);
			}
			
			return $result;
		}
	
		public static function register($username, $password) {
			$connection = Connection::getConnection();
			
			
			
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	