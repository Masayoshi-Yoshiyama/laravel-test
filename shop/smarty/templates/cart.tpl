{* Smarty *}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>カート | TEST SHOP</title>
    <link rel="stylesheet" href="shop.css">
  </head>
  <body>
    <h1>カート</h1>
    <table>
      <tr><th>商品名</th><th>単価</th><th>数量</th><th>小計</th></tr>
        {foreach from=$rows item=r}
          <tr>
            <td>{$r.name}</td>
            <td>{$r.price}</td>
            <td>{$r.num}</td>
            <td>{$r.price} * {$r.num} 円</td>
          </tr>
        {/foreach}
      <tr><td colspan='2'> </td><td><strong>合計</strong></td><td>{$sum} 円</td></tr>
    </table>
    <div class="base">
      <a href="index.php">お買い物に戻る</a>　
      <a href="cart_empty.php">カートを空にする</a>　
      <a href="buy.php">購入する</a>
    </div>
  </body>
</html>
