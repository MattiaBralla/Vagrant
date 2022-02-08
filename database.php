<?php
class Database{
	private const USERNAME = "vagrant";
	private const PASSWORD = "vagrantpass";
	private const HOST = "localhost:3306";
	private const DATABASE = "vagrant";
	private static $_connection;
	
	public static function getConnection(){
		if(is_null(self::$_connection)){
			self::$_connection = new mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE);
		}
		if (self::$_connection->connect_error) {
			die('Errore di connessione (' . self::$_connection->connect_errno . ') ' . self::$_connection->connect_error);
		} else {
			echo 'Connesso. ' .self::$_connection->host_info . "\n";
		}
		return self::$_connection;
	}
	
	private function __construct(){}
}
?>
