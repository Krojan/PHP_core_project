<?php
	require 'database/connection.php';
	require 'database/QueryBuilder.php';
	require 'MyEmployee.php';
	$config=require 'config.php';
	return (
		Connection::create($config['database'])
	);
?>