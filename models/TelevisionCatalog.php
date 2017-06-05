<?php

require_once 'lib/Database.php';
require_once 'models/TelevisionCollection.php';
require_once 'models/Television.php';

class TelevisionCatalog
{

	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	/**
	 * La base de datos
	 */
	private $database;

	public function save(Television $tv)
	{
		$params = array(
			'brand_name' => $tv->getBrandName(),
			'weight' => $tv->getWeight(),
			'color' => $tv->getColor(),
			'inches' => $tv->getInches(),
		);
		$this->db->save('televisions', $params);
	}
	

	public function update(Television $tv)
	{
		$params = array(
			'brand_name' => $tv->getBrandName(),
			'weight' => $tv->getWeight(),
			'color' => $tv->getColor(),
			'inches' => $tv->getInches(),
		);
		$this->db->update('televisions', $params, 'id_television', $tv->getIdTelevision());
	}
	
	public function delete($id)
	{
		$this->db->delete('televisions', 'id_television', $id);
	}
	
	
	public function getById($id)
	{
		$sql = "SELECT * FROM televisions where id_television = ? ";
		$obj = $this->db->fetchOne($sql, array($id));
		
		return ($obj) ? $this->cast($obj) : null;	
	}
	
	public function getAll()
	{
		$sql = "SELECT * FROM televisions";
		$collection = new TelevisionCollection();
		foreach($this->db->fetch($sql) as $object)
		{
			$tv = $this->cast( $object );
			$collection->append( $tv );
		}
		return $collection;
	}

	

	public function cast(stdClass  $object)
	{
			$tv = new Television();
			$tv->setIdTelevision( $object->id_television );
			$tv->setBrandName( $object->brand_name );
			$tv->setWeight( $object->weight );
			$tv->setInches( $object->inches );
			$tv->setColor( $object->color );
			return $tv;
	}

}