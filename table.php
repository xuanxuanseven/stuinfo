<?php
class xtable
{
   private $tit,$arr,$fons,$sextra;
   
   public function __construct()
   {
       $this->tit=array();       // strings with titles for first row 
       $this->arr=array();       // data to show on cells
       $this->fons=array("#EEEEEE","#CCEEEE");  // background colors for odd and even rows
       $this->sextra="";       // extra html code for table tag
   }

   public function extra($s)      // add some html code for the tag table
   {
       $this->sextra=$s;
   }
   
   
   public function background($arr) 
   {
	   if (is_array($arr)) 
		   $this->fons=$arr; 
	   else 
		   $this->fons=array($arr,$arr);
   }
   
   
   public function titles($text)//,$style="") 
   {
	   $this->tit=$text; 
       //$this->sesttit=$style;
   }
   
   
   public function addrow($a) //增加单行 这就是把两个函数拆分开的原因
   {
	   $this->arr[]=$a;
   }
   
   
   public function addrows($arr) //增加多行
   {
	   $n=count($arr); 
	   for($i=0;$i<$n;$i++) 
		   $this->addrow($arr[$i]);	       
   }
   
   public function html()
   {
       $cfondos=$this->fons;
       $titulos="<tr>";
       $t=count($this->tit);
       for($k=0;$k<$t;$k++)
       {
          $titulos.=sprintf("<th>%s</th>",$this->tit[$k]);
       }
       $titulos.="</tr>";//<tr>是负责行的  

       $celdas="";
       $n=count($this->arr);
       for($i=0;$i<$n;$i++)
       {
           $celdas.=sprintf("<tr style='background-color:%s'>",$this->fons[$i%2]);
           $linea=$this->arr[$i];
           $m=count($linea);
           for($j=0;$j<$m;$j++)
               $celdas.=sprintf("<td  %s>%s</td>","",$linea[$j]);
            $celdas.="</tr>";
       }
       return sprintf("<table cellpadding='0' cellspacing='0' border='1' %s>%s%s</table>",$this->sextra,$titulos,$celdas);
   }
   
	
    public function example()
    {
      $tit=array("Apellidos","Nombre","Telefono","Age");  //表格头
      $r1=array("Garcia","Ivan","888","25");     //要插入表中的数据 行
      $r2=array("Marco","Alfonso","555","25"); //标题和每行数据单元格相同 
      $x=new xtable(); 
      $x->titles($tit);      //take titles array
      $x->addrows(array($r1,$r2));   // take all rows at same time
      return $x->html();     //return html code to get/show/save it 
    }
}


?>