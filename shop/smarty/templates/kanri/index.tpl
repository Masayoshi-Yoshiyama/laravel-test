{* Smarty *}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品一覧</title>
    <link rel="stylesheet" href="kanri.css">
  </head>
  <body>
    <table>
      {foreach from=$goods item=value}
        <tr>
          <td>
          <img src="../images/{$value.img}.jpg" art="">
          </td>
          <td>
            <p class="goods">{$value.name}</p>
            <p>{$value.comment}</p>
            <p>{$value.price} 円</p>
          </td>
          <td width="80">
            <p><a href="edit.php?code={$value.code}">修正</a></p>
            <p><a href="upload.php?code={$value.code}">画像</a></p>
            <p><a href="delete.php?code={$value.code}" onclick="return confirm('削除してよろしいですか？')">削除</a></p>
          </td>
        </tr>
      {/foreach}
    </table>
    <div class="base">
      <a href="insert.php">新規追加</a>　
      <a href="../index.php" target="_blank">サイト確認</a>
    </div>
  </body>
</html>
