<?php

// データベース接続情報

$host = 'localhost';

$dbname = 'your_database';

$username = 'your_username';

$password = 'your_password';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

} catch (PDOException $e) {

    echo "データベース接続エラー: " . $e->getMessage();

    exit;

}

// 商品IDを取得

if (!isset($_GET['id'])) {

    echo "商品IDが指定されていません。";

    exit;

}

$productId = (int)$_GET['id'];

// asoli_goods テーブルから該当商品の詳細を取得

$sql = "SELECT * FROM asoli_goods WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':id', $productId, PDO::PARAM_INT);

$stmt->execute();

$product = $stmt->fetch(PDO::FETCH_ASSOC);

// 商品が存在しない場合の処理

if (!$product) {

    echo "指定された商品が見つかりません。";

    exit;

}

?>
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
<!-- 商品情報 -->
<div class="product-info">
<img src="<?= htmlspecialchars($product['goods_image']) ?>" alt="商品画像">
<p>カテゴリー: <?= htmlspecialchars($product['goods_category']) ?></p>
<p>商品について: <?= htmlspecialchars($product['goods_details']) ?></p>
<p>価格: <?= number_format($product['goods_price']) ?>円</p>
</div>
<!-- お届け予定日 -->
<p class="delivery-date">お届け予定日: <?= date('m月d日', strtotime('+5 days')) ?></p>
<!-- 配達員画像 -->
<img src="delivery-man.png" alt="配達員" width="100">
<!-- 商品一覧へ戻るボタン -->
<button class="button" onclick="window.location.href='product-list.php'">商品一覧へ戻る</button>
</body>
</html> 