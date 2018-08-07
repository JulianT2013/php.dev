<?php
class Database {
	private $host = 'localhost';
	private $user = 'root';
	private $pass = 'root';
	private $dbname = 'myblog';

	private $dbh;
	private $error;
	private $stmt;

	public function __construct() {
		/* set DSN */
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		
		/* Set Options */
		$options = [
			PDO::ATTR_PERSISTENT		=> true,
			PDO::ATTR_ERRMODE			=> PDO::ERRMODE_EXCEPTION
		];

		/* Create new PDO */
		try {
			$this->dbh = new PDO( $dsn, $this->user, $this->pass, $options );
		} catch( PDOException $e ) {
			$this->error = $e->getMessage();
		}

	}
}