<?php
error_reporting(0);
header("content-type:text/html;charset=utf-8");
    
	$Username = $_POST['name'];
	$Password = $_POST['pw'];
	$Repassword = $_POST['repw'];
	
    if(empty($Username)||empty($Password)||empty($Repassword)){
        echo "<script>alert('你逗我？信息输入没完整');</script>";
        echo "<script>window.location='register.php';</script>";
    }else{
		
	
    if ($Password!=$Repassword){
        echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
        echo"<script>location='register.php'</script>";
    }else{ 
	    //echo 'shujuku';
	
	    $con = mysql_connect("localhost","root","root");
        if(!$con){
	        echo 'error connect';	
        }

        mysql_select_db('test');

        $sql = "insert into users(Username,Password) values('{$Username}','{$Password}')";//插入数据库时  把变量放到'{变量}'

        $res = mysql_query($sql,$con);

        if($res){
	       echo '恭喜你注册成功';
        }
	
	}
	}
?>