<?php  
session_start();
require_once("ms_login.php");
$user = $_POST["username"];  
$psw = $_POST["password"];  
// $db= mysqli_connect("localhost", "root", "")
//     or die("连接数据库失败！");

//     mysqli_select_db($db,"user")
//     or die ("不能连接到user" . mysqli_error());

if($user == "" || $psw == "" )  
{  
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
}  
else  
{ 
  if (isset($_POST['Submit'])){
        // mysqli_query ( $db,"insert into id (username,password) values('$user','$psw')");
        // mysqli_close ( $db);
    $link = mysqli_connect('localhost', 'root', '', 'user'); 
    $query = "insert into id (username,password,NHH) values('$user','$psw','2')";
    $result = mysqli_query($link, $query);
    
    echo "<script>alert('注册成功！');location='login.html';</script>";
    }else{
        echo "<script>alert('注册失败！'); history.go(-1);</script>";    }
       }
?>  