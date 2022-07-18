<?php 

class Connection{

	static public function connect(){

		try{

			$link = new PDO("mysql:host=localhost;port=3306;dbname=axiondoer","root", "Ti3rr435tr3lla");

			$link->exec("set names utf8");

		}catch(PDOException $e){

			die("Error: ".$e->getMessage());

		}

		return $link;
		
	}

}

