<?php
/* Smarty version 4.5.1, created on 2024-03-26 03:58:06
  from 'D:\cyou-tec\sourcetree\laravel-test\shop\smarty\templates\kanri\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660239bec65591_91450609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c71b5cfffc7526d232cdf57d5ab78685b088a0cd' => 
    array (
      0 => 'D:\\cyou-tec\\sourcetree\\laravel-test\\shop\\smarty\\templates\\kanri\\index.tpl',
      1 => 1711420727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660239bec65591_91450609 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品一覧</title>
    <link rel="stylesheet" href="kanri.css">
  </head>
  <body>
    <table>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <tr>
          <td>
          <img src="../images/<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
.jpg" art="">
          </td>
          <td>
            <p class="goods"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['comment'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
 円</p>
          </td>
          <td width="80">
            <p><a href="edit.php?code=<?php echo $_smarty_tpl->tpl_vars['value']->value['code'];?>
">修正</a></p>
            <p><a href="upload.php?code=<?php echo $_smarty_tpl->tpl_vars['value']->value['code'];?>
">画像</a></p>
            <p><a href="delete.php?code=<?php echo $_smarty_tpl->tpl_vars['value']->value['code'];?>
" onclick="return confirm('削除してよろしいですか？')">削除</a></p>
          </td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <div class="base">
      <a href="insert.php">新規追加</a>　
      <a href="../index.php" target="_blank">サイト確認</a>
    </div>
  </body>
</html>
<?php }
}
