<?php
require_once 'lib/Dispatcher.php';

try
{
	$dispatcher = new Dispatcher();
	$dispatcher->dispatch();
} catch (Exception $e)
{
	echo '<h3>Error!</h3>';
	die($e->getMessage());
}




