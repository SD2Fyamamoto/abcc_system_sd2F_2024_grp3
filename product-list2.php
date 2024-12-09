<?php

// データベース接続情報

$host = 'localhost';

$dbname = 'your_database';

$username = 'your_username';

$password = 'your_password';

try {

    // データベース接続

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

} catch (PDOException $e) {

    echo "データベース接続エラー: " . $e->getMessage();

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
<a href="mypage2.php">アカウント</a>
</div>
<div class="search">
<button class="search-button" onclick="window.location.href='search2.php'">
<img src="./ASOLI.img/虫眼鏡.png" alt="検索アイコン">
</button>
</div>
</div>
<!-- タイトル -->
<div class="title">商品一覧</div>
<!-- 商品リスト -->
<div class="product-list-container">
<p>商品をタップして詳細を表示</p>
<?php foreach ($products as $product): ?>
<div class="product-item" data-id="<?= htmlspecialchars($product['id']) ?>" onclick="goToProductDetail(<?= htmlspecialchars($product['id']) ?>)">
<img src="<?= htmlspecialchars($product['image_path']) ?>" alt="商品画像" class="product-image">
<div class="product-info">
<div>カテゴリー：<?= htmlspecialchars($product['goods_category']) ?></div>
<div>商品について：<?= htmlspecialchars($product['goods_detailis']) ?></div>
<div class="price"><?= number_format($product['goods_price']) ?>円</div>
</div>
</div>
<?php endforeach; ?>
</div>
<!-- フッターボタン -->
<div class="footer">
<button onclick="goToLogin()">ログイン画面へ</button>
<button onclick="window.location.href='category_select2.php'">カテゴリーで絞る</button>
</div>
<script>

        function goToLogin() {

            window.location.href = "login2.php";

        }

        function goToProductDetail(productId) {

            window.location.href = `product-detail2.php?id=${productId}`;

        }
</script>
</body>
</html> 