<?php

namespace models;

use config\DbParams;
class DbConnect
{
	public function __construct()
	{
		
		try {

	    	$dbh = new PDO('mysql:host=localhost;dbname=' . DbParams::DATABASE_NAME, DbParams::USER, DATABASE::PASSWORD);
	   
		} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
		}	
	}
}
$db = new DbConnect();
var_dump($db);
