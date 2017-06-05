<?php



/**
 * Singleton Database
 */
class Database
{

	private static $instance;
	private $pdo;

	private function __construct()
	{
		$this->pdo = new PDO('mysql:host=localhost;dbname=zetta','root','t3mporal');
	}

	public function delete($table, $field, $value)
	{
		$sql = "DELETE FROM {$table} WHERE {$field} = ?";
		$st = $this->pdo->prepare($sql);
		$st->execute(array($value));
	}

	public function save($table, $params)
	{
		$marks = $values = array();
		foreach($params as $param)
		{
			$marks[] = '?';
			$values[] = $param;
		}
		$marks = implode(',',$marks);
		$sql = "insert into {$table} (". implode(',',array_keys( $params )) . " ) VALUES ({$marks})";
		$st = $this->pdo->prepare($sql);
		$st->execute( $values );

	}


	public function update($table, $params, $field, $value)
	{
		$marks = $values = array();
		foreach($params as $key => $param)
		{
			$marks[] = $key. ' = ?';
			$values[] = $param;
		}
		$values[] = $value;
		//$marks = implode(',',$marks);
		$sql = "UPDATE {$table} set ". implode(',',$marks) . "  WHERE {$field} = ?";

		$st = $this->pdo->prepare($sql);
		$st->execute( $values );

	}

	public static function getInstance()
	{
		if( NULL == self::$instance )
			self::$instance = new Database();
		return self::$instance;
	}

	public function fetchOne($sql, $bind = null)
	{
		$r = $this->fetch($sql, $bind);
		return (count($r))  ? $r[0]  : null;
	}


	public function fetch($sql, $bind = null)
	{
		$st = $this->pdo->prepare($sql);
		$st->execute($bind);
		$result = array();
		while($obj =  $st->fetchObject() )
		{
			$result[] = $obj;
		}
		return $result;
	}


}