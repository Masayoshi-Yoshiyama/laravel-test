<?php
  require 'common.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();
  require '../../smarty/templates/kanri/index.tpl';
?>
