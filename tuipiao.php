<?php
if (isset($_GET['id'])){
$id = $_GET['id'];
$link = mysqli_connect("localhost","root","", "user");;
mysqli_query($link, "set names 'utf8'");
$sql1 = "SELECT yupiao from pwn where id = {$id}";
$nums = mysqli_fetch_all(mysqli_query($link,$sql1));
// var_dump($nums);
$yupiao = $nums[0][0] - 1 ;
$sql = "UPDATE pwn SET yupiao=$yupiao where id =$id ";
$result = mysqli_query($link, $sql);
echo "<script>alert('退票成功！'); history.go(-1);</script>";  
}
?>