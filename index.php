<?php
include('lib.php');
include('db_connect.php');
include('smarty-3.1.33/libs/Smarty.class.php');
$smarty = new Smarty;

$page = (isset($_GET['page']) ? $_GET['page'] : 1); 
$sort = (isset($_GET['sort']) && $_GET['sort'] === 'birth') ? 'birth' : 'id'; 
$offset = $page*10-10;
$account = (isset($_GET['account']) ? $_GET['account'] : '');
$account2 =" where account Like '%$account%' ";


$query = "SELECT * FROM account_info ".$account2.($sort == 'birth' ? ' ORDER BY birth DESC ' :' ') ."limit 10 OFFSET $offset"; 
$result = db_query($link, $query);
$rows = $result->fetch_all(MYSQLI_ASSOC);
$smarty->assign('rows', $rows);





$query2 = "select count(*) as num from account_info".$account2;
$result2 = db_query($link, $query2);
$count = intval($result2->fetch_object()->num);
if( $count%10 == 0){
    $end = floor($count/10);
}
else{
    $end = floor($count/10)+1;
}
if($page > 1){          //如果不是第一頁 就有上一頁鍵
    $last=$page-1;
    $smarty->assign('last', $last);    
}
$smarty->assign('sort', $sort);
$next=$page+1;              //下一頁的頁數
if($next <= $end ){
    $smarty->assign('next', $next);
}
$smarty->assign('end', $end);

$smarty->assign('account', $account);


$smarty->display('smarty.tpl');
?>