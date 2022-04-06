<?php
function conectar(){
		$servername = "sql.freedb.tech";
		$username = "freedb_IVEGAL";
		$password = "gCjrgwfW7&@Nyr4";
		$namedb = "freedb_latinfxsound-preinicio";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $namedb);

		if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}
?>