<?php
//从test数据库中提取数据 
function collect_data()
{
    $db = mysqli_connect("localhost", "root", "")
    or die("连接数据库失败！");

    mysqli_select_db($db, "user")
    or die ("不能连接到user" . mysqli_error());

    mysqli_query($db, "set names utf8");

    $sql = "select * from id";
    $result = mysqli_query($db, $sql);
    $colum = mysqli_fetch_array($result);

    return $colum;
}
?>  