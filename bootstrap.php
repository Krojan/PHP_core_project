<?php
	$config=require 'config.php';
	require 'database/connection.php';
	require 'database/QueryBuilder.php';
	require 'MyEmployee.php';
	
	return new QueryBuilder(
		Connection::create($config['database'])
	);
?>