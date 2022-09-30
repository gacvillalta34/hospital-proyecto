<?php
$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
	 mysql_select_db("biblioteca",$conect)or die("No se encontró la base de datos");
     mysql_query ("SET NAMES 'utf8'");
	 ?>