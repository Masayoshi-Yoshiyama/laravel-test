﻿<?php
  require_once('D:\xampp\php\includes\Smarty\libs\Smarty.class.php');
  $smarty = new Smarty();
  $smarty->template_dir = '../smarty/templates/';
  $smarty->compile_dir  = '../smarty/templates_c/';
  
  require 'common.php';
  $error = '';
  if (@$_POST['submit']) {
    $code = $_POST['code'];
    if (move_uploaded_file($_FILES['pic']['tmp_name'], "../images/$code.jpg")) {
      $img = $code;
      $pdo = connect();
      $pdo->query("UPDATE goods SET img=$img WHERE code=$code");
      header('Location: index.php');
      exit();
    } else {
      $error .= 'ファイルを選択してください。<br>';
    }
  } else {
    $code = $_GET['code'];
  }
  $smarty->assign("code", $code);
  $smarty->assign("error", $error);
  $smarty->display('../../smarty/templates/kanri/upload.tpl');
?>
