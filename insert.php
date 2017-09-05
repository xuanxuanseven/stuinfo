<?php

$con = mysql_connect("localhost","root","root");

if(!$con){
	echo 'error connect';
}

mysql_select_db('test');


//'$_POST[txt1]'   单引号应该放在外面，不能放在变量里面
$sql = "insert into stuinfotable VALUES(
'$_POST[txt1]',
'$_POST[txt2]',
'$_POST[txt3]',
'$_POST[txt4]',
'$_POST[txt5]'
)";

$res = mysql_query($sql,$con);
 
 if($res){
	 echo '1';
 }else{
	 echo '0';
 }
 mysql_close($con);

?>