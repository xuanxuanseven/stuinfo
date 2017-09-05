<?php

$txt = $_POST['txt'];

$con = mysql_connect("localhost","root","root");

if(!$con){
	echo 'connect error';
}

mysql_select_db('test');

$sql = "insert into infotable(Text) values('{$txt}')";  //在编辑环境中 变量的显示的清晰的 是对的  直接写$txt 是灰的，这样不对

$res = mysql_query($sql,$con);

echo $res;
mysql_close($con);


?>