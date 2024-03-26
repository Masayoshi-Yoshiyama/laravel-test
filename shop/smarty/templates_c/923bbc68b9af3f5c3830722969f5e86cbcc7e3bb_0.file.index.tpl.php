<?php
/* Smarty version 4.5.1, created on 2024-03-26 03:42:59
  from 'D:\cyou-tec\sourcetree\laravel-test\shop\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6602363398a549_69481136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923bbc68b9af3f5c3830722969f5e86cbcc7e3bb' => 
    array (
      0 => 'D:\\cyou-tec\\sourcetree\\laravel-test\\shop\\smarty\\templates\\index.tpl',
      1 => 1711420970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602363398a549_69481136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST SHOP</title>
    <link rel="stylesheet" href="shop.css">
  </head>
<body>
  <h1>TEST Shop</h1>
  <table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gary']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
      <tr>
        <td>
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
.jpg" art="">
        </td>
        <td>
          <p class="goods"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</p>
          <p><?php echo $_smarty_tpl->tpl_vars['value']->value['comment'];?>
</p>
        </td>
        <td width="80">
          <p><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
 円</p>
          <form action="cart.php" method="post">
            <select name="num">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select>
            <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['code'];?>
">
            <input type="submit" name="submit" value="カートへ">
          </form>
        </td>
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
  </body>
</html>
<?php }
}
