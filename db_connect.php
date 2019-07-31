<?php
$link = mysqli_connect("localhost","root","","account_info");                
if(!$link)
{
    echo "連接失敗".mysqli_connect_error($link);
    exit;
}
