<?php  
function(){  
$db = mysqli_connect("localhost","root","")   
	or die("连接数据库失败！");  
  
mysqli_select_db("user")  
	or die ("不能连接到user".mysqli_error());  
	  
 mysqli_query("set names gb2312");  	  
}  
	  
?>  