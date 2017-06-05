<?php

require_once 'lib/View.php';

abstract class ZettaController
{
	
	protected $view;
	protected $request;
	
	public function init()
	{
		$this->view = new View();
		$this->request = new Request();
	}
	
	
	public function dispatch()
	{
		$action = $this->request->getParam('action');
		extract($this->view->getParams());
		require_once 'views/'.$action.'.php';
	}
	

}