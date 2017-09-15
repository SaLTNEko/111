<?php
session_start();
require_once ("ms_register.php");
$d1 = $_POST['1'];
$d2 = $_POST['2'];
$d3 = $_POST['3'];
$d4 = $_POST['4'];
$d5 = $_POST['5'];
$d6 = $_POST['6'];
$d7 = $_POST['7'];    

if (isset($_POST['submit'])){
    $link = mysqli_connect('localhost', 'root', '', 'user'); 
    $query = "insert into pwn(banci,time,fazhan,daozhan,shijian,eding,yupiao) VALUES ('$d1','$d2','$d3','$d4','$d5','$d6','$d7')";
    $result = mysqli_query($link, $query);
    
    echo "<script>alert('插入成功！');location='login.html';</script>";
    }else{
        echo "<script>alert('插入失败！'); history.go(-1);</script>";    } 
?>