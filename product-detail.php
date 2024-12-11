
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>商品詳細</title>
    <style>
        /* 商品詳細 */
        .title {
   margin-top: 20px;
   font-size: 24px;
   font-weight: bold;
   text-align: center;
}
    .header {
    width: 100%;
    padding: 10px;
    background-color: #f9f9f9;
    border-bottom: 1px solid #ccc;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
 }
.product-detail-container {
   width: 90%;
   max-width: 500px; /* 全体の幅を調整 */
   margin: 20px auto; /* 中央寄せ */
   padding: 20px;
   border: 1px solid #ccc;
   text-align: center; /* 中央寄せ */
   box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* ボックスシャドウを追加（オプション） */
   border-radius: 10px; /* 少し角を丸める */
}
.product-detail-container img {
   width: 300px; /* 画像を大きくする */
   height: auto; /* アスペクト比を保持 */
   margin: 0 auto 15px; /* 中央寄せ */
   display: block;
}
.product-info {
   font-size: 16px;
   margin-bottom: 20px; /* ボタンとの間隔を調整 */
   line-height: 1.6;
}
/* ボタンのスタイル */
button {
   padding: 12px 25px; /* サイズを調整 */
   font-size: 16px;
   color: white;
   background-color: blue;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   margin: 0 10px; /* ボタン間のスペースを確保 */
}
button:hover {
   background-color: darkblue; /* ホバー時のエフェクト */
}
    </style>
</head>
<body>
    <!-- Header -->
    <div class="title">商品詳細</div>


<!-- 商品詳細情報 -->
<div class="product-detail-container">
<img src="./ASOLI.img/ソファスク.png" alt="商品画像" class="product-image">
<div class="product-info">
<div>カテゴリー：ソファー</div>
<div>価格：23,555円</div>
<div>商品説明：座り心地の良いソファーです。</div>
</div>
<div>
<button class="button" onclick="window.location.href='product-list.php'">商品一覧画面へ戻る</button>
<button class="button" onclick="window.location.href='purchase.php'">購入する</button>
</div>
</div>
<br>
<div>お届け先：福岡県福岡市博多区 博多駅南1-11-11</div>
<br>
<div>お届け予定日 12月20日</div>
    <script>
        function goToProductList() {
            window.location.href = "product_list.php";
        }
    </script>
</body>
</html>
