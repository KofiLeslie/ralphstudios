<?php
//database connection
try {
$dbc = new PDO('mysql:host=localhost; dbname=ralph_studios', 'root', '');
$dbc->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}

//  $dbHost = "localhost";
//  $dbUsername = "root";
//  $dbPassword = "";
//  $dbName = "ralph_studios";


// 	if (!isset($this->db)) {
// 		$conn = new mysqli ($this ->dbHost, $this ->dbUsername, $this ->dbPassword, $this->dbName);
// 		if ($conn->connect_error) {
// 			die("Failed to connect with MySQL: " . $conn->connect_error);
// 		}else {
// 			$this->db = $conn;
// 		}
// 	}

