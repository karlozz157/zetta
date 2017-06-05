<?php

/**
 * Clase que contiene los valores del request
 */
class Request
{

	public function __construct()
	{
	
	}
	
	/**
	 * Obtiene el valor de un parametro 
	 * @return mixed|null
	 */
	public function getParam($paramName, $default = NULL)
	{
		return isset($_REQUEST[$paramName]) ? $_REQUEST[$paramName] : $default;
	}
	
	/**
	 * Setea el valor de un parametro del request
	 */
	public function setParam($paramName, $value)
	{
		$_REQUEST[$paramname] = $value;
	}
	
	
	public function isPost()
	{
		return empty($_POST) ? false : true;
	}
	
}