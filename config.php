<?php
	return[
		'database'=>[
			'connection'=>"mysql:host:localhost",
			'name'=>"mydb",
			'username'=>"root",
			'password'=>"",
			'options'=>[ PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION]
		]
	];

?>