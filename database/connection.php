<?php
	class Connection{
		public static function create(){
			try{
				$pdo=new PDO("mysql:host=localhost;dBname=mydb",'root','');
				$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				return $pdo;
			}
			catch(PDOException $e){
				die ($e->getmessage());
			}
		}
	}
?>