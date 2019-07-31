<?php
/* Smarty version 3.1.33, created on 2019-07-31 21:40:51
  from 'C:\xampp\htdocs\account_info\templates\smarty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d419a63a55970_25122138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd34c0e058e2748b4189dd2ce25e8c1a6aa493979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\account_info\\templates\\smarty.tpl',
      1 => 1564580450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d419a63a55970_25122138 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>    
    <body class="container col-6 ">
       
        <table class="table table-striped ">
            <thead class="table-primary">
                <tr>
                    <th>編號</th>
                    <th>帳號</th>
                    <th>姓名</th>
                    <th>性別</th>
                    <th>生日</th>
                    <th>信箱</th>
                    <th>備註</th>
                </tr>
            </thead>
            <tbody> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                    <th><?php if (isset($_GET['page'])) {
echo (intval($_GET['page']))*10-9+$_smarty_tpl->tpl_vars['i']->value;
} else {
echo $_smarty_tpl->tpl_vars['i']->value+1;
}?></th>
                    <td><a href='detail.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['account'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['gender'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['birth'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['mail'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['remark'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <a href='index.php?page=1&sort=id'><button class="btn btn-primary">首頁</button></a>
        <?php if (isset($_smarty_tpl->tpl_vars['last']->value)) {?> 
        <a href='index.php?page=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&account=<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
'><button class="btn btn-secondary">上一頁</button></a>
        <?php }?>
    
        <?php if (isset($_smarty_tpl->tpl_vars['next']->value)) {?>
        <a href='index.php?page=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&account=<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
'><button class="btn btn-secondary">下一頁</button></a>
        <?php }?>
        <a href='index.php?page=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&account=<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
'><button class="btn btn-secondary">尾頁</button></a>
        <?php if ($_smarty_tpl->tpl_vars['sort']->value == "id") {?>
        <a href='index.php?page=1&sort=birth&account=<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
'><button class="btn btn-light">排序</button></a>
        <?php } else { ?>
        <a href='index.php?page=1&sort=id&account=<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
'><button class="btn btn-dark">排序</button></a>
        <?php }?>
        <a href="create.html"><button class="btn btn-primary">新增</button></a>
        <form action="index.php" >
            <div class="form-group ">
                <label for="Inputaccount"><b>帳號搜尋<b></label>
                <input type="text" name="account" class="form-control" id="Inputaccount" placeholder="輸入帳號">
                <button type="submit" class="btn btn-secondary">搜尋</button>
            </div>
        </form>

        
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body>    

</html><?php }
}
