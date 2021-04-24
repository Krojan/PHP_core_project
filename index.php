<?php
	$db=require 'bootstrap.php';
	
	// $pdo=Connection::create($config['database'] ); done in bootstrap.php

	$data=$db->selectAll("employee");

	require 'view.php'; //this should be executed only after object $data is returned
	var_dump($data[0] instanceof MyEmployee); //array of objects to class MyEmployee is created
	
	//var_dump($data);
	//var_dump($data[0]->name);
	
?>