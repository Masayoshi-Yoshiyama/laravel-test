<?php
/* Smarty version 4.5.1, created on 2024-03-26 02:33:45
  from 'D:\cyou-tec\sourcetree\laravel-test\shop\smarty\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660225f9ce7507_67944115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd534936dd3b1c7508d21791696b5f7d9373310f' => 
    array (
      0 => 'D:\\cyou-tec\\sourcetree\\laravel-test\\shop\\smarty\\templates\\cart.tpl',
      1 => 1711416823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660225f9ce7507_67944115 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>カート | TEST SHOP</title>
    <link rel="stylesheet" href="shop.css">
  </head>
  <body>
    <h1>カート</h1>
    <table>
      <tr><th>商品名</th><th>単価</th><th>数量</th><th>小計</th></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['num'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['price'];?>
 * <?php echo $_smarty_tpl->tpl_vars['r']->value['num'];?>
 円</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <tr><td colspan='2'> </td><td><strong>合計</strong></td><td><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
 円</td></tr>
    </table>
    <div class="base">
      <a href="index.php">お買い物に戻る</a>　
      <a href="cart_empty.php">カートを空にする</a>　
      <a href="buy.php">購入する</a>
    </div>
  </body>
</html>
<?php }
}
