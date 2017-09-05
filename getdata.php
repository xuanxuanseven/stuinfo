<?php


 //echo 'huoqushuju';
 error_reporting(0);
 $con = mysql_connect("localhost","root","root");
 
 if(!$con){
	 echo "connnect error";
 }
 
 mysql_select_db("test",$con);
 $sql = "select Id,LastName,FirstName,Address,City from stuinfotable";

 $res = mysql_query($sql,$con);

   $arr = array();
   $i = 0;
   while($row=mysql_fetch_array($res)){
     //var_dump($row);
	 $arr[$i][0] = $row[0];
	 $arr[$i][1] = $row[1];
	 $arr[$i][2] = $row[2];
	 $arr[$i][3] = $row[3];
	 $arr[$i][4] = $row[4];
	 $i++;
  }  //值是对的
   $json = json_encode($arr);
   echo $json;
  // echo 'hello';
   
   
   
   // dataType:'json',
   mysql_close($con);
?>