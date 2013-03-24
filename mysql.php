<?php
final class MYSQL {
		private $connection;
		
		public function create($hostname, $username, $password, $database ) {
		if( !this->connection = mysql_connect( $hostname, $username, $password, $database )){
			exit('Error: Could not make a database connection using '.$username.'@'.$hostname);
			}
		if( !mysql_select_db($database, $this->connection)) {
			exit('Error: Could not connect to database '.$database);
		}
