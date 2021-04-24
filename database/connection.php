<?php
	class Connection{
		public static function create($config){
			try{
				//$pdo=new PDO("mysql:host=localhost;dBname=mydb",'root','');

				return new PDO(

							$config['connection'] .";dBname=". $config['name'],
							$config['username'],
							$config['password'],
							$config['options']

						);


				//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); is done by $config['options']
				
			}
			catch(PDOException $e){
				die ($e->getmessage());
			}
		}
	}
?>