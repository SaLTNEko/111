<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style type="text/css">
.border1{
	height: 400px;
	width: 600px;
	border:2px  solid #d7d7d7;
	border-radius:5px;
	text-align:center;
	margin:0 auto;
	margin-top: 250px;
}
.info-item>span {
	margin-right: 16px;
}

</style>
</head>
<body>
<style type="text/css">
.border1{
	height: 400px;
	width: 600px;
	border:2px  solid #d7d7d7;
	border-radius:5px;
	text-align:center;
	margin:0 auto;
	margin-top: 250px;
}
</style>
<div class="border1" actio="">
<?php
 $db = mysqli_connect("localhost", "root", "","user")
 or die("连接数据库失败！");

mysqli_select_db($db, "user")
or die ("不能连接到user" . mysqli_error());
mysqli_query($db, "set names utf8");
$query ='select * from pwn order by fazhan';
$result = mysqli_query($db,$query);
echo "班次&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp起飞时间&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp发站&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp到站&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp飞行时间&nbsp&nbsp&nbsp额定载量&nbsp&nbsp&nbsp余票数量<br/>";
while($row = mysqli_fetch_assoc($result)){
	echo "<div class='info-item'>";
	echo "<span class='banci'>".$row['banci']."</span>";
	echo "<span class='time'>".$row['time']."</span>";
	echo "<span class='fazhan'>".$row['fazhan']."</span>";
	echo "<span class='daozhan'>".$row['daozhan']."</span>";
	echo "<span class='shijian'>".$row['shijian']."</span>";
	echo "<span class='eding' style='margin-left:15px;'>".$row['eding']."</span>";
	echo "<span class='yupiao' style='margin-left:40px;'>".$row['yupiao']."</span>";
	echo "</div>";
}
mysqli_close($db);
?>
<div > 
<a href="my3.php">返回</a>
</div>
</div>

</body>
</html>
