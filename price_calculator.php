<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //商品情報
    $product_name = "ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;

    //計算処理
    $subtotal = $price * $quantity;
    $tax_amount = $subtotal * (1 + $tax_rate);
    $total = $subtotal + $tax_amount;

    //結果の表示
    echo "商品名：" . $product_name . "<br>";
    echo "単価：" . $price . "円<br>";
    echo "数量：" . $quantity . "個<br>";
    echo "小計：" . $subtotal . "円<br>";
    echo "消費税（１０％）：" . $tax_amount . "円<br>";
    echo "合計金額：" . $total . "円<br>";

    ?>
</body>

</html>