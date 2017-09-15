<?php

$T1 = $_POST["1"];
if (isset($_POST['submit'])){
$db = mysqli_connect("localhost","root", "","user");
$query = "insert into id (tickets) values ('$T1')";
$result = mysqli_query($db,$query);
mysqli_close($db);
}
?>
