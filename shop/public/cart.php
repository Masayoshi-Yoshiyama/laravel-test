﻿<?php
  require_once('D:\xampp\php\includes\Smarty\libs\Smarty.class.php');
  $smarty = new Smarty();
  $smarty->template_dir = '../smarty/templates/';
  $smarty->compile_dir  = '../smarty/templates_c/';
  
  require 'common.php';
  $rows = array();
  $sum = 0;
  $pdo = connect();
  if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
  if (@$_POST['submit']) {
    @$_SESSION['cart'][$_POST['code']] += $_POST['num'];
  }
  foreach($_SESSION['cart'] as $code => $num) {
    $st = $pdo->prepare("SELECT * FROM goods WHERE code=?");
    $st->execute(array($code));
    $row = $st->fetch();
    $st->closeCursor();
    $row['num'] = strip_tags($num);
    $sum += $num * $row['price'];
    $rows[] = $row;
  }
  $smarty->assign("rows", $rows);
  $smarty->assign("sum", $sum);
  $smarty->display('../smarty/templates/cart.tpl');

?>
