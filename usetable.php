<?php

 require('table.php');   //包含table文件。
// Example
  $t1=new xtable();  //创建这个对象的目的是可以
 // echo $t1->example()."<hr />";
 


 $t2=new xtable();
  for($i=1;$i<=10;$i+=2)
  {
    $t2->addrow(array("ODD",$i));
    $t2->addrow(array("EVEN",$i+1));
  }
  $t2->background(array("pink","gold"));//偶数奇数页显示的background不一样
  $t2->titles(array("TYPE","#"));
  $t2->extra(" style='width:500px; background-color:cyan; color:navy;'");
 
 // echo $t2->html()."<hr />";   //echo 出已经写好的标签们  就和直接写html标签功能相似
  
  
  $t3=new xtable();
  for($i=1;$i<=6;$i++)
  {
      $t3->addrow(array("5x".$i,5*$i));
  }
  $t3->background(array("olive","maroon"));
  $t3->titles(array("Multiplication table","5"));
  $t3->extra("style='border:dotted red 10px; padding-left:4px;padding-right:4px; text-align:right;width:500px; background-color:black; color:white;'");
 // echo $t3->html()."<hr />";
  
  
  
  $t4=new xtable();
  $a=array("#");
  for($i=1;$i<=10;$i++)
  {
    $a[]=$i;
  }
  $t4->addrow($a);
  $t4->background(array("pink","gold"));
  $tit=array(); $tit[]="Numbers";
  for($i=1;$i<=10;$i++) 
	  $tit[]="#";
  $t4->titles($tit);
  $t4->extra("style='border:solid 1px silver; padding-left:4px;padding-right:4px; text-align:center;width:500px; background-color:cyan; color:navy;'");
  //echo $t4->html()."<hr />";


?>