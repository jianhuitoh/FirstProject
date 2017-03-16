<?php
include "auth.php";
include "db.php";

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM contact WHERE id = '".$id."'");
if(mysql_num_rows($sql)>0{
	$row = mysql_fetch_array($sql);
}

>?