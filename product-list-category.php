<?php
session_start();
// データベース接続設定
$host = 'mysql305.phy.lolipop.lan'; // データベースホスト名
$dbname = 'LAA1557234-php2024'; // データベース名
$username = 'LAA1557234'; // ユーザー名
$password = 'Pass1202'; // パスワード
try {
   $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("データベース接続失敗: " . $e->getMessage());
}
// カテゴリIDを取得
if (isset($_SESSION['category_id'])) {
    echo "カテゴリが選択されていません。";
    exit;
   $category_id = $_SESSION['category_id'];
   // 商品を取得
   $stmt = $pdo->prepare("SELECT * FROM products WHERE category_id = :category_id");
   $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
   $stmt->execute();
   $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
   die("カテゴリが選択されていません。");
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>商品一覧 - カテゴリ別</title>
</head>
<body>
<h1>商品一覧</h1>
<?php if (!empty($products)): ?>
<div class="product-list">
<?php foreach ($products as $product): ?>
<div class="product-item">
<h2><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></h2>
<p>価格: <?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?>円</p>
<p><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></p>
</div>
<?php endforeach; ?>
</div>
<?php else: ?>
<p>選択されたカテゴリには商品がありません。</p>
<?php endif; ?>
</body>
</html>