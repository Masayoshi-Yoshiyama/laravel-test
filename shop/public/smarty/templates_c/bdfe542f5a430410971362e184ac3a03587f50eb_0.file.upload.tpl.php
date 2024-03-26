<?php
/* Smarty version 4.5.1, created on 2024-03-26 03:13:54
  from 'D:\cyou-tec\sourcetree\laravel-test\shop\smarty\templates\kanri\upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66022f62cb0a81_09917846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdfe542f5a430410971362e184ac3a03587f50eb' => 
    array (
      0 => 'D:\\cyou-tec\\sourcetree\\laravel-test\\shop\\smarty\\templates\\kanri\\upload.tpl',
      1 => 1711419120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66022f62cb0a81_09917846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>商品画像アップロード</title>
      <link rel="stylesheet" href="kanri.css">
    </head>
  <body>
    <div class="base">
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <span class=\"error\"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
      <?php }?>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>
          商品画像（JPEGのみ）<br>
          <input type="file" name="pic">
        </p>
        <p>
          <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
          <input type="submit" name="submit" value="追加">
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
