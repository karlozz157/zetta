<?php



class Television
{

	/**
	 * id de television
	 * @int
	 */
	private $idTelevision;
	
	/**
	 *
	 * @string
	 */
	private $brandName;
	
	/**
	 *
	 * @int
	 */
	private $weight;
	
	/**
	 *
	 * @int
	 */
	private $inches;
	
	/**
	 *
	 * @string
	 */
	private $color;


	/**
	 * @param int
	 */
	public function setIdTelevision($idTelevision)
	{
		$this->idTelevision = $idTelevision;
	}
	
	/**
	 * @return int
	 */
	public function getIdTelevision()
	{
		return $this->idTelevision;
	}
	
	/**
	 * @param string
	 */
	public function setBrandName($brandName)
	{
		$this->brandName = $brandName;
	}
	
	/**
	 * @return string
	 */
	public function getBrandName()
	{
		return $this->brandName;
	}
	
	/**
	 * @param int
	 */
	public function setWeight($weight)
	{
		$this->weight = $weight;
	}
	
	/**
	 * @return int
	 */
	public function getWeight()
	{
		return $this->weight;
	}
	
	/**
	 * @param int
	 */
	public function setInches($inches)
	{
		$this->inches = $inches;
	}
	
	/**
	 * @return int
	 */
	public function getInches()
	{
		return $this->inches;
	}
	
	/**
	 * @param string
	 */
	public function setColor($color)
	{
		$this->color = $color;
	}
	
	/**
	 * @return string
	 */
	public function getColor()
	{
		return $this->color;
	}
	
	


}