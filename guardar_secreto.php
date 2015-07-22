<?php
//session_start();
$dbh=mysql_connect ("localhost", "lucas_bc",
"Bcreativa001") or die('Cannot connect to the database because: ' . mysql_error());
mysql_select_db ("lucas_secretos"); 



	mysql_query("INSERT into secretos SET secreto='{$_POST['secreto']}', nombre='{$_POST['nombre']}', email='{$_POST['email']}', edad='{$_POST['edad']}'");

echo "ok";
?>