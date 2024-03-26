<?php
  require 'common.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();
  $smarty->assign("goods", $goods);
  $smarty->display('../../smarty/templates/kanri/index.tpl');
?>
