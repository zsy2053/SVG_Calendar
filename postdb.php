<?php
include("connect.php");
$xid = @$_POST['xid'];
$id = @$_POST['id'];
$color = @$_POST['color'];
$className = @$_POST['class'];
$postusername = @$_POST['username'];
$date = @$_POST['date'];
$time = @$_POST['time'];
echo $xid;

$query = mysql_query("INSERT INTO users VALUES('','$xid','$id','$color','$postusername','$date','$time')");



?>