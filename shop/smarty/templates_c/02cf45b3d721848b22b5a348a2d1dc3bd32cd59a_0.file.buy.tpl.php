<?php
/* Smarty version 4.5.1, created on 2024-03-26 02:47:28
  from 'D:\cyou-tec\sourcetree\laravel-test\shop\smarty\templates\buy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660229304eea27_83961492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02cf45b3d721848b22b5a348a2d1dc3bd32cd59a' => 
    array (
      0 => 'D:\\cyou-tec\\sourcetree\\laravel-test\\shop\\smarty\\templates\\buy.tpl',
      1 => 1711417641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660229304eea27_83961492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>購入 | TEST SHOP</title>
    <link rel="stylesheet" href="shop.css">
  </head>
  <body>
    <h1>購入</h1>
    <div class="base">
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <span class=\"error\"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
      <?php }?>
      <form action="buy.php" method="post">
        <p>
          お名前<br>
          <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        </p>
        <p>
          ご住所<br>
          <input type="text" name="address" size="60" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
">
        </p>
        <p>
          電話番号<br>
          <input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
">
        </p>
        <p>
          <input type="submit" name="submit" value="購入">
        </p>
      </form>
    </div>
    <div class="base">
      <a href="index.php">お買い物に戻る</a>　
      <a href="cart.php">カートに戻る</a>
    </div>
  </body>
</html>
<?php }
}
