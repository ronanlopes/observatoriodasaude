<?php
	$conexao = mysql_connect("localhost","root","root") or die (mysql_error());
	$database = mysql_select_db("TICS",$conexao);
	mysql_query("SET NAMES UTF8");
?>
