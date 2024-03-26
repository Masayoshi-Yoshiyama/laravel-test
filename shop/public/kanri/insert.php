<?php
  require_once('D:\xampp\php\includes\Smarty\libs\Smarty.class.php');
  $smarty = new Smarty();
  $smarty->template_dir = '../smarty/templates/';
  $smarty->compile_dir  = '../smarty/templates_c/';
  
  require 'common.php';
  $error = $name = $comment = $price = '';
  $pdo = connect();
  if (@$_POST['submit']) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $price = $_POST['price'];
    $stock = 0;
    $img = 0;
    if (!$name) $error .= '商品名がありません。<br>';
    if (!$comment) $error .= '商品説明がありません。<br>';
    if (!$price) $error .= '価格がありません。<br>';
    if (preg_match('/\D/', $price)) $error .= '価格が不正です。<br>';
    if (!$error) {
      $pdo->query("INSERT INTO goods(name,comment,price,stock,img) VALUES('$name','$comment',$price,$stock,$img)");
      header('Location: index.php');
      exit();
    }
  }
  $smarty->assign("name", $name);
  $smarty->assign("comment", $comment);
  $smarty->assign("price", $price);
  $smarty->assign("error", $error);
  $smarty->display('../../smarty/templates/kanri/insert.tpl');
?>
