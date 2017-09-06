<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="../../../jquery/jquery-3.2.1.js"></script>
<script>
   $(document).ready(function(){
	   
	   $("#div1").html("对酒当歌，人生几何！<br />譬如朝露，去日苦多。<br />慨当以慷，忧思难忘。<br />何以解忧？唯有杜康。<br />青青子衿，悠悠我心。<br />但为君故，沉吟至今。<br />呦呦鹿鸣，食野之苹。<br />我有嘉宾，鼓瑟吹笙。<br />明明如月，何时可掇？<br />忧从中来，不可断绝。<br />越陌度阡，枉用相存。<br />契阔谈，心念旧恩。<br />月明星稀，乌鹊南飞。<br />绕树三匝，何枝可依？<br />山不厌高，海不厌深。");
	   $("#btn1").click(function(){
		   //alert('jkl');
		   $.ajax({
			   url:"getdata.php",
			   //dataType:'json',    
			   success:function(data){
				  // alert(data[0][0]);
				    //alert(data);//getdata.php文件中只echo  hello 时输出是hello echo 两个时出来的不对。
                    data = JSON.parse(data);	//这一句和 dataType:'json'  都可以把data限定为json对象。用其中一个就行		  
					for(var i=0,j=1;i<4&&j<5;++i,++j){
						$('#'+'i'+j).html(data[i][0]);
                        $('#'+'l'+j).html(data[i][1]);		
                        $('#'+'f'+j).html(data[i][2]);
                        $('#'+'a'+j).html(data[i][3]);
                        $('#'+'g'+j).html(data[i][4]);				
					}			
				   // data = JSON.parse(data);  //查询这个
				   //console.log(data);				  
			   }			   
		   });
	   });
	   
	   $("#btn4").click(function(){
		   var $txt1 = $("#txt1").val();  //用val取值
		   var $txt2 = $("#txt2").val();
		   var $txt3 = $("#txt3").val();
		   var $txt4 = $("#txt4").val();
		   var $txt5 = $("#txt5").val();
		   
		   //$(":input").val("");//可以全部清空input标签的值。
		   
		   //$("#txt1").val("");  //可以，这是删除指定id标签的值
		  
		   $("#i1").html($txt1);
		   $("#l1").html($txt2);
		   $("#f1").html($txt3);
		   $("#a1").html($txt4);
		   $("#g1").html($txt5);
		   //alert($txt1);
		   $.ajax({
			   type:"POST",
			   url:"insert.php",
			   data:{txt1:$txt1,txt2:$txt2,txt3:$txt3,txt4:$txt4,txt5:$txt5},
			   success:function(data){
				   alert(data);
			   }
		   });		    
	   });
	   
	   
	   $("#btn2").click(function(){
		   $("#i4").hide();
		   $("#l4").hide();
		   $("#f4").hide();
		   $("#a4").hide();
		   $("#g4").hide();
	   });
	   
	   $("#btn3").click(function(){
		   $("#i4").show();
		   $("#l4").show();
		   $("#f4").show();
		   $("#a4").show();
		   $("#g4").show();
	   });
	   
	   $("#btn5").click(function(){
		   var $txt = $("#textarea1").val();
		   $("#textarea1").val('');  //清除textarea内容
		   $("#div2").html($txt);//接下来是怎么把数据放到数据库中
		   
		   $.ajax({
			   type:"POST",
			   url:"inserttxt.php",
			   data:{txt:$txt},
			   success:function(data){
				   alert(data);
			   }   
			   
		   });
		   
        		   
	   });
   });

</script>
</head>

<body background="">

<h4>学生信息表</h4>

<button id='btn1'>点击获取数据</button>
<button id='btn2'>删除一行</button>
<button id='btn3'>显示删除的行</button>
<br />
<input id='txt1'>ID</input>
<br />
<input id='txt2'>姓</input>
<br />
<input id='txt3'>名</input>
<br />
<input id='txt4'>地址</input>
<br />
<input id='txt5'>年龄</input>
<button id='btn4'>插入</button>
<table border="1">
<tr>
   <th>编号</th>
   <th>姓</th>
   <th>名</th>
   <th>地址</th>
   <th>年龄</th>
</tr>

<tr>
   <td id='i1'></td>
   <td id='l1'></td>
   <td id='f1'></td>
   <td id='a1'></td>
   <td id='g1'></td>
</tr>

<tr>
   <td id='i2'></td>
   <td id='l2'></td>
   <td id='f2'></td>
   <td id='a2'></td>
   <td id='g2'></td>
</tr>

<tr>
   <td id='i3'></td>
   <td id='l3'></td>
   <td id='f3'></td>
   <td id='a3'></td>
   <td id='g3'></td>
</tr>

<tr>
   <td id='i4'></td>
   <td id='l4'></td>
   <td id='f4'></td>
   <td id='a4'></td>
   <td id='g4'></td>
</tr>
</table>

<div id='div1'></div>

<textarea id='textarea1' cols=40 rows=4></textarea>
<button id='btn5'>确定</button>
<div id='div2'></div>
</body>
</html>