<?php

// データベース接続情報

$host = 'mysql304.phy.lolipop.lan';

$dbname = 'LAA1557215-php2024';

$username = 'LAA1557215';

$password = 'Pass0308';

try {

    // PDOインスタンスの作成

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "データベース接続エラー: " . htmlspecialchars($e->getMessage());

    exit;

}

// asoli_goodsテーブルから商品情報を取得

$sql = "SELECT * FROM asoli_goods";

$stmt = $pdo->query($sql);

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?> 
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./CSS/style.css"/>
<title>商品一覧</title>
</head>
<body>
<!-- Header -->
<div class="header">
<div class="account-info">
<img src="./ASOLI.img/neko.png" alt="アカウント画像">
<a href="mypage.php">アカウント</a>
</div>
</div>
<!-- タイトル -->
<div class="title">商品一覧</div>
<!-- 商品リスト -->
<div class="product-list-container">
<p>商品をタップして詳細を表示</p>
<?php if (empty($products)): ?>
<p>商品がありません。</p>
<?php else: ?>
<?php foreach ($products as $product): ?>
<?php

            // 画像パスの確認

            $imagePath = htmlspecialchars($product['image_path']);

            if (!file_exists($imagePath)) {

                $imagePath = './ASOLI.img/no-image.png'; // デフォルト画像

            }

            ?>
<div class="product-item" data-id="<?= htmlspecialchars($product['id']) ?>" 

                 onclick="goToProductDetail(<?= htmlspecialchars($product['id']) ?>)">
<img src="<?= $imagePath ?>" alt="商品画像" class="product-image">
<div class="product-info">
<div>カテゴリー：<?= htmlspecialchars($product['category']) ?></div>
<div>商品について：<?= htmlspecialchars($product['description']) ?></div>
<div class="price"><?= number_format($product['price']) ?>円</div>
</div>
</div>
<?php endforeach; ?>
<?php endif; ?>
</div>
<!-- フッターボタン -->
<div class="footer">
<button onclick="window.location.href='login.php'">ログイン画面へ</button>
<button onclick="window.location.href='category_select.php'">カテゴリーで絞る</button>
</div>
<!-- JavaScript -->
<script>

    function goToProductDetail(productId) {

        location.href = `product-detail.php?id=${productId}`;

    }
</script>
</body>
</html> 