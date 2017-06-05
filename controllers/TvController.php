<?php

require_once 'lib/ZettaController.php';
require_once 'models/TelevisionCatalog.php';
/**
 * Clase que representa el controlador de lista
 */
class TvController extends ZettaController
{

	public function listAction()
	{
		
		$tvCatalog = new TelevisionCatalog();
		$this->view->tvs = $tvCatalog->getAll();
	}

	public function editAction()
	{
		$id = $this->request->getParam('id');
		$tvCatalog = new TelevisionCatalog();
		$tv = $tvCatalog->getById($id);
		$this->view->tv = $tv;
		if($this->request->isPost())
		{
			$tv->setBrandName( $this->request->getParam('brand') );
			$tv->setWeight( $this->request->getParam('weight') );
			$tv->setInches( $this->request->getParam('inches') );
			$tv->setColor( $this->request->getParam('color') );
			$tvCatalog = new TelevisionCatalog();
			$tvCatalog->update( $tv );
			$this->view->message = 'Television editada ';
		}
	}
	
	public function createAction()
	{
		if($this->request->isPost())
		{
			$tv = new Television();
			$tv->setBrandName( $this->request->getParam('brand') );
			$tv->setWeight( $this->request->getParam('weight') );
			$tv->setInches( $this->request->getParam('inches') );
			$tv->setColor( $this->request->getParam('color') );
			$tvCatalog = new TelevisionCatalog();
			$tvCatalog->save( $tv );
			$this->view->message = 'Television guardada ';
		}
	}

	public function deleteAction()
	{
		$id = $this->request->getParam('id');
		$tvCatalog = new TelevisionCatalog();
		$tvCatalog->delete($id);
		$this->view->message = 'Television eliminada ';
	}

}