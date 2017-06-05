<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<?php if(isset($message)): ?>
	<strong>
	<?php echo $message ?>
	</strong>
	<a href="?controller=tv&action=list"> Regresar</a>
<?php endif; ?>

<h2>Nueva</h2>

<form action="" method="post">
<table>

<tfoot>
	<tr>

		<td colspan="2"><input  type="submit" value="Enviar" /></td>
	</tr>
</tfoot>

	<tbody>
	
	<tr>
		<th>Brand</th>
		<td><input name="brand" type="text" /></td>
	</tr>
		<tr>
		<th>Weight</th>
		<td><input name="weight" type="text" /></td>
	</tr>
		<tr>
		<th>Inches</th>
		<td><input name="inches" type="text" /></td>
	</tr>
		<tr>
		<th>Color</th>
		<td><input name="color" type="text" /></td>
	</tr>
	
	</tbody>

</table>
</form>
<body>
</body>
</html>
