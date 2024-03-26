<?php
  require_once('D:\xampp\php\includes\Smarty\libs\Smarty.class.php');
  $smarty = new Smarty();
  $smarty->template_dir = '../smarty/templates/';
  $smarty->compile_dir  = '../smarty/templates_c/';
  
  require 'common.php';
  $error = $name = $address = $tel = '';
  if (@$_POST['submit']) {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $tel = htmlspecialchars($_POST['tel']);
    if (!$name) $error .= 'お名前を入力してください。<br>';
    if (!$address) $error .= 'ご住所を入力してください。<br>';
    if (!$tel) $error .= '電話番号を入力してください。<br>';
    if (preg_match('/[^\d-]/', $tel)) $error .= '電話番号が正しくありません。<br>';
    if (!$error) {
      $pdo = connect();
      $body = "商品が購入されました。\n\n"
       . "お名前: $name\n"
       . "ご住所: $address\n"
       . "電話番号: $tel\n\n";
      foreach($_SESSION['cart'] as $code => $num) {
        $st = $pdo->prepare("SELECT * FROM goods WHERE code=?");
        $st->execute(array($code));
        $row = $st->fetch();
        $st->closeCursor();
        $body .= "商品名: {$row['name']}\n"
          . "単価: {$row['price']} 円\n"
          . "数量: $num\n\n";
      }
      /*
          $from = "masayoshi.yoshiyama@gmail.com";
          $to = "ma-yoshiyama@cyou-tec.co.jp";
          mb_send_mail($to, "購入メール", $body, "From: $from");
      */
      $_SESSION['cart'] = null;
      $smarty->display('../smarty/templates/buy_complete.tpl');
      exit();
    }
  }
  $smarty->assign("name", $name);
  $smarty->assign("address", $address);
  $smarty->assign("tel", $tel);
  $smarty->assign("error", $error);
  $smarty->display('../smarty/templates/buy.tpl');




?>
