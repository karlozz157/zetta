<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<h2>lista de televisiones</h2>

<a href="?controller=tv&action=create"> Dar de alta nueva</a>

<table>
	<thead>	
		<tr>
			<th>ID</th>
			<th>BRAND</th>
			<th>WEIGHT</th>
			<th>INCHES</th>
			<th>COLOR</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ( $tvs as $tv){ ?>

		<tr>
			<td><?php echo $tv->getIdTelevision() ?></td>
			<td><?php echo $tv->getBrandName() ?></td>
			<td><?php echo $tv->getWeight() ?></td>
			<td><?php echo $tv->getInches() ?></td>
			<td><?php echo $tv->getColor() ?></td>
			<td><a href="?controller=tv&action=delete&id=<?php echo $tv->getIdTelevision() ?>"> Eliminar</a></td>
			<td><a href="?controller=tv&action=edit&id=<?php echo $tv->getIdTelevision() ?>"> Editar</a></td>
		</tr>

<?php  } ?>
	</tbody>
</table>
</body>
</html>
