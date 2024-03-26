{* Smarty *}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品追加</title>
    <link rel="stylesheet" href="kanri.css">
  </head>
  <body>
    <div class="base">
      {if $error}
        <span class=\"error\">{$error}</span>
      {/if}
      <form action="insert.php" method="post">
        <p>
          商品名<br>
          <input type="text" name="name" value="{$name}">
        </p>
        <p>
          商品説明<br>
          <textarea name="comment" rows="10" cols="60">{$comment}</textarea>
        </p>
        <p>
          価格<br>
          <input type="text" name="price" value="{$price}">
        </p>
        <p>
          <input type="submit" name="submit" value="追加">
        </p>
      </form>
    </div>
    <div class="base">
      <a href="index.php">一覧に戻る</a>　
    </div>
  </body>
</html>
