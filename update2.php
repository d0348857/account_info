<?php
include('db_connect.php');
include('lib.php');
$id = $_GET['id'];                          
$account = $_GET['account'];
$name = $_GET['name'];
$gender = $_GET['gender'];
$birth = $_GET['birth'];
$mail = $_GET['mail'];
$remark = $_GET['remark'];


$query = "update account_info set account='$account',name='$name',gender='$gender',birth ='$birth',mail='$mail',remark='$remark' where id='$id'";

$result = db_query($link, $query);


header("Location: detail.php?id=$id");
?>