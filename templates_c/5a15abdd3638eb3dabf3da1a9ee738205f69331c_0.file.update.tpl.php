<?php
/* Smarty version 3.1.33, created on 2019-07-31 20:10:02
  from 'C:\xampp\htdocs\account_info\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d41851a3e65e9_68475435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a15abdd3638eb3dabf3da1a9ee738205f69331c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\account_info\\templates\\update.tpl',
      1 => 1564574999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d41851a3e65e9_68475435 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head> 
<body class="container col-6 ">
    
    <form action='update2.php'>
        <table class="table table-striped ">
            <tr>
                <th>ID</th>
                <td><textarea name='id' readonly=true style='width:30px;height:30px;resize:none' ><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</textarea></td>
            </tr>
            <tr>
                <th>帳號</th>
                <td><input type='text' name='account' value='<?php echo $_smarty_tpl->tpl_vars['data']->value["account"];?>
'></td>
            </tr>
            <tr>
                <th>姓名</th>
                <td><input type='text' name='name' value='<?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
'></td>
            </tr>
            <tr>
                <th>性別</th>
                <td><input type='text' name='gender' value='<?php echo $_smarty_tpl->tpl_vars['data']->value["gender"];?>
'></td>
            </tr>
            <tr>
                <th>生日</th>
                <td><input type='text' name='birth' value='<?php echo $_smarty_tpl->tpl_vars['data']->value["birth"];?>
'></td>
            </tr>
            <tr>
                <th>信箱</th>
                <td><input type='text' name='mail' value='<?php echo $_smarty_tpl->tpl_vars['data']->value["mail"];?>
'></td>
            </tr>
            <tr>
                <th>備註</th>
                <td><textarea name='remark' style='width:200px;height:80px;resize:none' ><?php echo $_smarty_tpl->tpl_vars['data']->value['remark'];?>
</textarea></td>
            </tr>
                    
        </table>
        
        <button type='submit' class="btn btn-primary">確認更改</button>
    </form>

    <a href='index.php'><button type='submit' class="btn btn-secondary ">返回</button></a>


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
