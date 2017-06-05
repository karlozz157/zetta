<?php

require_once 'lib/Request.php';


/**
 * Clase que se encarga de hacer el dispatch del controller
 */
class Dispatcher
{

	/**
	 * Request
	 */
	private $request;

	/**
	 * Constructor de la clase
	 */
	public function __construct()
	{
		$this->request = new Request();
	}

	/**
	 * Metodo principal que se encarga de ejecutar el controller necesario
	 */
	public function dispatch()
	{
		$controller = strtolower( $this->request->getParam('controller','tv') );
		$action = strtolower( $this->request->getParam('action','list') );
		$fileName =  'controllers/'.ucfirst($controller).'Controller.php';
		if( file_exists($fileName) )
		{
			require_once $fileName;
			$class = ucfirst($controller).'Controller';
			$method = ucfirst($action).'Action';
			$reflectedClass = new ReflectionClass($class);
			if( $reflectedClass->hasMethod( $method ) )
			{
				$instance = $reflectedClass->newInstance();
				$instance->init();
				$method = new ReflectionMethod($class, $method);
				$method->invoke($instance);
				$instance->dispatch();
			}
			else
			{
				throw new Exception('No existe la accion especificada');
			}
		}
		else
		{
			throw new Exception('El controller especificado no existe');
		}
	}



}