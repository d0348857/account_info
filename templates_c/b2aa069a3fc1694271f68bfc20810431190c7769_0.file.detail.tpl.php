<?php
/* Smarty version 3.1.33, created on 2019-08-01 00:00:31
  from 'C:\xampp\htdocs\account_info\templates\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d41bb1f649026_47208974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2aa069a3fc1694271f68bfc20810431190c7769' => 
    array (
      0 => 'C:\\xampp\\htdocs\\account_info\\templates\\detail.tpl',
      1 => 1564588827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d41bb1f649026_47208974 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body class="container col-6 ">
        <table class="table table-striped ">
            <tr>
                <th>帳號</th>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['account'];?>
</td>
            </tr>
            <tr>
                <th>姓名</th>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td>
            </tr>
            <tr>
                <th>性別</th>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['gender'];?>
</td>
            </tr>
            <tr>
                <th>生日</th>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['birth'];?>
</td>
            </tr>
            <tr>
                <th>信箱</th>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['mail'];?>
</td>
            </tr>
            <tr>
                <th>備註</th>
                <td><textarea readonly=true style='width:200px;height:80px;resize:none' ><?php echo $_smarty_tpl->tpl_vars['data']->value['remark'];?>
</textarea></td>
            </tr>
            
        </table>
    
        <a href='index.php?page=1&sort=id'><button type='submit' class="btn btn-primary ">首頁</button></a>
        <a href='update.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
'><button type='submit' class="btn btn-secondary">更改</button></a>
        <a href='delete.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
'><button type='submit' class="btn btn-secondary" onclick="javascript:alert('clicked');event.preventDefault()">刪除</button></a>
    
    
        <?php echo '<script'; ?>
>
            function confirmDelete(e) {
                if (!confirm('確定刪除?')) {
                    e.preventDefault();
                }
            }
        <?php echo '</script'; ?>
>
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
</html>


<?php }
}
