<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","root");
if(!$con){
	echo 'connect error';
}

mysql_select_db('test');
/*if(isset($_POST['name'])&&isset($_POST['pw'])){ //isset 只要变量存在且值不为NULL都会进来，也就是输入的字符串是空的时候也会进来 0 NULL '' 双等号是相等的，三等号是不一样的
	var_dump($_POST['name']);
	var_dump($_POST['pw']);
	if($_POST['name']==NULL){
		echo 'shi null';
	}
	echo '没数据依然进来了';
}*/
if(!empty($_POST['name'])&&!empty($_POST['pw'])){//认真查一下 empty和isset的区别  非空进入  使用isset的时候是0 也会进入,也算设置了
	//echo 'jincuole';
	$sql = "select * from users where Username='{$_POST['name']}'&&Password='{$_POST['pw']}'";
	$res = mysql_query($sql,$con);
	
	if (mysql_num_rows($res) == 1){
            header("Location:stuinfotable.php");
    }else{
		echo '用户名和密码不匹配';
	}
	
}else{
	echo '请输入用户名和密码';
}



?>