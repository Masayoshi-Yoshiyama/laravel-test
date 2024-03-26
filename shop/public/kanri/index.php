<?php
  require_once('D:\xampp\php\includes\Smarty\libs\Smarty.class.php');
  $smarty = new Smarty();
  $smarty->template_dir = '../smarty/templates/';
  $smarty->compile_dir  = '../smarty/templates_c/';
  
  require 'common.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();
  $smarty->assign("goods", $goods);
  $smarty->display('../../smarty/templates/kanri/index.tpl');
?>
