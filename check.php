<?php

//require_once ("mysql_connect.php");
$name = $_POST['name'];
$password = $_POST['password'];
if ($name == "") {
    echo "<script type='text/javascript'>alert('请填写用户名');location='login.html';  
            </script>";
} elseif ($password == "") {
    echo "<script type='text/javascript'>alert('请填写密码');location='login.html';</script>";

}    else {
     $sql = "SELECT `username`,`password`, `NHH` FROM `id` WHERE username='$name'";
    $result =mysqli_query($link,$sql);
    $rows = mysqli_fetch_array($result);
   if (($rows['username'] == $name) && ($rows['password'] == $password) &&($rows['NHH'] == '0')) {
        echo "<script type='text/javascript'>alert('登陆成功');location='my1.html';</script>";
    }elseif(($rows['username'] == $name) && ($rows['password'] == $password) &&($rows['NHH'] == '1')) {
     echo "<script type='text/javascript'>alert('登陆成功');location='my2.php';</script>";

   }else {
        echo "<script type='text/javascript'>alert('登陆成功');location='my3.php';</script>";
    } 
}

?>  
