
<?php
		$con = pg_connect("host=localhost dbname=loca user=postgres password=54321 port=5432");
		or die("Connection failed: ".pg_last_error());
 
		/* check connection */
		if (pg_last_error()) {
		printf("Connect failed: %s\n", pg_last_error());
		exit();
		} else {
		$this->conn = $con;
		}
		return $this->conn;
	}
}
?>