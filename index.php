<?php 

  // Continue & break
  // =====================================

  $products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
  ];

  foreach ($products as $product) {
    if($product['name'] === 'lightning bolt') {
    break; // break out of loop - stop at this statement
    }

    if($product['price'] > 15) {
      continue; // skip the rest of the code from this point and conitnue with the next value in the loop
    }
    echo $product['name'] . '<br />';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My first PHP file</title>
</head>
<body>

</body>
</html>