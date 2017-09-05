<?php
$con = mysql_connect("localhost","root","root");

if(!$con){
	echo 'connect error';
}

mysql_select_db('test');

$sql = "delete from stuinfotable";

//$sql = "alert table stuinfotable add primary key(Id)";
mysql_query($sql,$con);

mysql_close($con);
?>