<?php
	class QueryBuilder{
		public static function selectAll($pdo){
			$st=$pdo->prepare("SELECT * FROM mydb.employee");
			$st->execute();
			//$st->setFetchMode(PDO::FETCH_ASSOC); //use $data['column']
			$st->setFetchMode(PDO::FETCH_CLASS,'MyEmployee'); //$data->column
			return $st->fetchAll();
		}
	}
	?>