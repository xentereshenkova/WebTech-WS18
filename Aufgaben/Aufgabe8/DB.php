<?php
class DB {
	private $connection;

	/*
	 * der Konstruktor ist fertig
	 */
	public function __construct($name, $host = 'localhost', $user = 'root', $pass='') {
		try {
			$this->connection = new PDO ( "mysql:host=$host;dbname=$name;charset=utf8", $user, $pass );
			$this->connection->setAttribute ( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
		} catch ( PDOException $exception ) {
			die ( $exception->getMessage () );
		}
	}

    /*
     * der Destruktor ist fertig
     */
	public function __destruct() {
		$this->connection = null;
	}

    /*
     * die Funktion all ist fertig
     */
	public function all() {
		$statement = $this->connection->query ( 'SELECT * FROM mockupdatatable ORDER BY nachname ASC' );
		return $statement->fetchAll ();
	}

	public function get($id) {
	$statement = $this->connection->prepare ( 'SELECT * FROM mockupdatatable WHERE id =: $id' );
		$statement->bindParam ( ':id', $id, PDO::PARAM_INT );
		$statement->execute ();
		return $statement->fetch ();
	}

	public function add(array $daten) {
		$statement = $this->connection->prepare (  statement: 'INSERT INTO mockupdatatable
																														(vorname, nachname, email, ipnr)
																														VALUES (?,?,?,?)' );
        return $statement->execute ( $daten );
	}

    /*
     * hier fehlt die SQL-Anfrage
     */
	public function edit(array $daten) {
	    print_r($daten);
		$statement = $this->connection->prepare ( statement: 'UPDATE mockupdatatable SET
																													vorname=?, nachname=?, email=?, ipnr=? WHERE id=?' );
		return $statement->execute ( $daten );
	}

	/*
	 * die Funktion delete ist fertig
	 */
	public function delete($id) {
		$statement = $this->connection->prepare ( 'DELETE FROM mockupdatatable WHERE id = ?' );
		return $statement->execute ( array ( $id ) );
	}
}
?>
