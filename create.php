<?php
include('db_connect.php');
include('lib.php');

$account = $_POST['account'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$mail = $_POST['mail'];
$remark = $_POST['remark'];

$query = "INSERT into account_info (account,name,gender,birth,mail,remark) value ('$account','$name','$gender','$birth','$mail','$remark')";     

$result = db_query($link, $query);

header("Location: index.php");
?>