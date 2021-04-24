<?php
	class QueryBuilder{
		protected $pdo;

		public function __construct(PDO $pdo){
			$this->pdo=$pdo;
		}

		public function selectAll($table){
			$st=$this->pdo->prepare("SELECT * FROM mydb.{$table}");
			$st->execute();
			//$st->setFetchMode(PDO::FETCH_ASSOC); //use $data['column']
			//$st->setFetchMode(PDO::FETCH_CLASS,'MyEmployee'); //$data->column
			return $st->fetchAll(PDO::FETCH_CLASS,'MyEmployee');
		}
	}
	?>