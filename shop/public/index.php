<?php
  require 'common.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();
  $smarty->assign("gary", $goods);
  $smarty->display('../smarty/templates/index.tpl');
?>
