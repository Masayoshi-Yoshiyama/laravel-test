{* Smarty *}

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>商品画像アップロード</title>
      <link rel="stylesheet" href="kanri.css">
    </head>
  <body>
    <div class="base">
      {if $error}
        <span class=\"error\">{$error}</span>
      {/if}
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>
          商品画像（JPEGのみ）<br>
          <input type="file" name="pic">
        </p>
        <p>
          <input type="hidden" name="code" value="{$code}">
          <input type="submit" name="submit" value="追加">
        </p>
      </form>
    </div>
    <div class="base">
      <a href="index.php">一覧に戻る</a>　
    </div>
  </body>
</html>
