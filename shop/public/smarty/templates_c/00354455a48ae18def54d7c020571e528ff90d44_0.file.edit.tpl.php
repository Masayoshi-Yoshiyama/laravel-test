<?php
/* Smarty version 4.5.1, created on 2024-03-26 03:00:32
  from 'D:\cyou-tec\sourcetree\laravel-test\shop\smarty\templates\kanri\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66022c40937944_23374905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00354455a48ae18def54d7c020571e528ff90d44' => 
    array (
      0 => 'D:\\cyou-tec\\sourcetree\\laravel-test\\shop\\smarty\\templates\\kanri\\edit.tpl',
      1 => 1711418428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66022c40937944_23374905 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品修正</title>
    <link rel="stylesheet" href="kanri.css">
  </head>
  <body>
    <div class="base">
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <span class=\"error\"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
      <?php }?>
      <form action="edit.php" method="post">
        <p>
          商品名<br>
          <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        </p>
        <p>
          商品説明<br>
          <textarea name="comment" rows="10" cols="60"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</textarea>
        </p>
        <p>
          価格<br>
          <input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
        </p>
        <p>
          <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
          <input type="submit" name="submit" value="更新">
        </p>
      </form>
    </div>
    <div class="base">
      <a href="index.php">一覧に戻る</a>　
    </div>
  </body>
</html>
<?php }
}
