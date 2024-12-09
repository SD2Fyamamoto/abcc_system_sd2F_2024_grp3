
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>商品一覧 - カテゴリ別</title>
<style>
   .product-list {
       display: flex;
       flex-direction: column;
       gap: 20px;
   }
   .product-item {
       border: 1px solid #ccc;
       padding: 10px;
       border-radius: 5px;
   }
</style>
</head>
<body>
<h1>商品一覧</h1>
<?php if (!empty($products)): ?> <!-- 商品がある場合 -->
<div class="product-list">
<?php foreach ($products as $product): ?>
<div class="product-item">
<h2><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></h2>
<p>価格: <?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?>円</p>
<p><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></p>
</div>
<?php endforeach; ?>
</div>
<?php else: ?> <!-- 商品がない場合 -->
<p>選択されたカテゴリには商品がありません。</p>
<?php endif; ?>
</body>
</html><?php
session_start();
// データベース接続設定
$host = 'mysql:host=mysql304.phy.lolipop.lan';

$dbname = 'dbname=LAA1557215-php2024';

$username = 'LAA1557215';

$password = 'Pass0308';

try {
    $pdo=new PDO('mysql:host=mysql304.phy.lolipop.lan;
    dbname=LAA1557215-php2024;charset=utf8','LAA1557215','Pass0308');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("データベース接続失敗: " . $e->getMessage());
}
// カテゴリIDを取得
if (!isset($_SESSION['category_id'])) { // セッションにカテゴリIDがない場合
   echo "カテゴリが選択されていません。";
   exit;
}
$category_id = $_SESSION['category_id']; // セッションからカテゴリIDを取得
// 商品を取得
$stmt = $pdo->prepare("SELECT * FROM products WHERE category_id = :category_id");
$stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
try {
   $stmt->execute();
   $products = $stmt->fetchAll(PDO::FETCH_ASSOC); // 商品リストを取得
} catch (PDOException $e) {
   die("データベースクエリ失敗: " . $e->getMessage());
}
?>