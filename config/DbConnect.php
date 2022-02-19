<?php

namespace model;
class DataBase
{
	public function __construct()
	{
		try {
	    $dbh = new PDO('mysql:host=localhost;dbname=' . DB, $user, $pass);
	   
		} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
		}	
	}
}

