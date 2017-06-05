<?php


class View
{
	
	public function View()
	{
		$this->params = array();
	}
	
	
	private $params = array();
	
	
	public function __set($key, $val)
	{
		$this->params[$key] = $val;
	}
	
	public function getParams()
	{
		return $this->params;
	}
	
}