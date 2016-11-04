<?php
include("connect.php");
$username = @$_POST['username'];
$xid = @$_POST['xid'];

$query = mysql_query("SELECT * FROM users WHERE username='$username' AND xid='$xid'");
$fetch = mysql_fetch_assoc($query);
$date = $fetch['date'];
$time = $fetch['time'];
echo $date." ".$time;

?>