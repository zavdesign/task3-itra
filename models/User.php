<?php
namespace models;
use models\DbConnect;

class User
{
	public function getData()
	{
		$db = new Connect();
		var_dump(111);die;
			$data = $db->query("'SELECT * FROM `users` WHERE  `login` = '{$login}' AND `password` = '{$password}'", PDO::FETCH_ASSOC);
			$resultData = $data->fetchAll();	
		
	 		return mysqli_fetch_assoc($check_user);   
		}

}

