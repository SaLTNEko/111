<?php

if (isset($_POST['submit'])){
        // mysqli_query ( $db,"insert into id (username,password) values('$user','$psw')");
        // mysqli_close ( $db);
    $link = mysqli_connect('localhost', 'root', '', 'user'); 
    $query = "insert into id (tickets) values('1')";
    $result = mysqli_query($link, $query);
    
    echo "<script>alert('购票成功！');history.go(-1);;</script>";
    }else{
        echo "<script>alert('购票失败！'); history.go(-1);</script>";    }
       
?>
