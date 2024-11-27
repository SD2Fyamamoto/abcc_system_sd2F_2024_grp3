<!--商品購入画面(purchase.html)のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>商品購入</title>
</head>
<body>
    <h1>商品購入</h1>

    <p class="thank-you">ご購入ありがとうございます</p>
    <p class="note">※返品の際はメールまたは電話にてお問い合わせください。</p>

    <div class="product-info">
        <img src="./ASOLI.img/ソファスク.png" alt="商品画像">
        <p>カテゴリー: XXXX</p>
        <p>商品について: 〜〜〜〜〜〜</p>
        <p>価格: XXXX円</p>
    </div>

    <p class="delivery-date">お届け予定日: X月X日</p>

    <img src="delivery-man.png" alt="配達員" width="100">

    <button class="button" onclick="window.location.href='product-list.php'">商品一覧へ戻る</button>
</body>
</html>
