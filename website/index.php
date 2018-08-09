<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
      <h1>Welcome to the shop</h1>
      <ul>
          <?php
              $json = file_getcontents('http://product-service');
              $obj = json_decode($json);

              $products = $obj->products;
              foreach ($product as $product) {
                  echo "<li>$product</li>";
              }
          ?>
      </ul>
  </body>
</html>
