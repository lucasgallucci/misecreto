<?php
	$_POST['secreto']

	mysql_query("INSERT into secretos SET secreto='{$_POST['secreto']}, nombre='{$_POST['nombre']}, email='{$_POST['email']}, edad='{$_POST['edad']}'");

?>