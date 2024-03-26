{* Smarty *}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST SHOP</title>
    <link rel="stylesheet" href="shop.css">
  </head>
<body>
  <h1>TEST Shop</h1>
  <table>
    {foreach from=$gary item=value}
      <tr>
        <td>
          <img src="images/{$value.img}.jpg" art="">
        </td>
        <td>
          <p class="goods">{$value.name}</p>
          <p>{$value.comment}</p>
        </td>
        <td width="80">
          <p>{$value.price} 円</p>
          <form action="cart.php" method="post">
            <select name="num">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select>
            <input type="hidden" name="code" value="{$value.code}">
            <input type="submit" name="submit" value="カートへ">
          </form>
        </td>
      </tr>
    {/foreach}
    </table>
  </body>
</html>
