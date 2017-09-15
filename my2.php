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
	margin:0 auto;
	margin-top: 250px;
}
</style>
<div class="border1" action="">
<?php
$link = mysqli_connect("localhost","root","", "user");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_query($link, "set names 'utf8'");

$sql = "SELECT * FROM `pwn`";
$result = mysqli_query($link, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
require_once("ms_login.php");
echo "班次&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp起飞时间&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp发站&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp到站&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp飞行时间&nbsp&nbsp&nbsp额定载量&nbsp&nbsp&nbsp余票数量<br/>";
foreach ($rows as $row) {
	echo "<div class='info-item'>";
	echo "<span class='banci'>".$row['banci']."</span>";
	echo "<span class='time'>".$row['time']."</span>";
	echo "<span class='fazhan'>".$row['fazhan']."</span>";
	echo "<span class='daozhan'>".$row['daozhan']."</span>";
	echo "<span class='shijian'>".$row['shijian']."</span>";
	echo "<span class='eding' style='margin-left:15px;'>".$row['eding']."</span>";
	echo "<span class='yupiao' style='margin-left:40px;'>".$row['yupiao']."</span>";
	echo "</div>";


    date_default_timezone_set('PRC');
	$a = strtotime($row['time']);
	$c = strtotime('+2hours');
	$one = date('h:i:s',$a);
	$three = date('h:i:s',$c);
	if( $one < $three ) {
		echo "航班".$row['banci']."已开始售票";
		 echo "<a href='shoupiao.php?id=$row[id]'>售票</a>";
	
	}else{
		echo "航班".$row['banci']."未开始售票";
		echo "<a href='tuipiao.php?id=$row[id]'>退票</a>";
    }
    
}

mysqli_free_result($result);
mysqli_close($link);
?> 
</div>
</body>
</html>


