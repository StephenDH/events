<?php 
		//Database variables
		$host = "localhost";
		$dbname = "events";
		$user = "root";
		$pass = "";

		//Open database
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );