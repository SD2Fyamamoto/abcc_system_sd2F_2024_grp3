<?php
// データベース接続情報
$host = 'mysql305.phy.lolipop.lan'; // 変更する場合は適宜修正
$dbname = 'LAA1557201-php2024'; // あなたのデータベース名
$username = 'LAA1557201'; // あなたのデータベースユーザー名
$password = 'Pass0107'; // あなたのデータベースパスワード

try {
    // データベース接続
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "データベース接続エラー: " . $e->getMessage();
    exit;
}

// ユーザーID (ログイン中のユーザーIDをセッションなどで取得して設定)
$userId = 1; // 仮に固定値を設定しています。セッションなどで動的に設定してください。

// ユーザー情報を取得
$userSql = "SELECT * FROM asoli_user WHERE user_id = :id"; // 'user_id' を適切な列名に変更
$userStmt = $pdo->prepare($userSql);
$userStmt->execute(['user_id' => $userId]);
$user = $userStmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "ユーザーが見つかりません。";
    exit;
}

// 注文履歴を取得
$orderSql = "SELECT asoli_goods.*, asoli_goods.goods_name, asoli_goods.goods_image, asoli_goods.goods_category, asoli_goods.goods_price 
             FROM asoli_goods
             JOIN asoli_goods ON asoli_goods.goods_id = asoli_goods.goods_id 
             WHERE asoli_goods.user_id = :user_id"; // 'user_id' を適切な列名に変更
$orderStmt = $pdo->prepare($orderSql);
$orderStmt->execute(['id' => $userId]);
$orders = $orderStmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>マイページ</title>
</head>
<body>
    <h1>マイページ</h1>

    <!-- アカウント情報 -->
    <div class="info-section">
        <h2>アカウント情報の確認</h2>
        <ul class="info-list">
            <li>アカウント名: <?= htmlspecialchars($user['username']) ?></li>
            <li>メールアドレス: <?= htmlspecialchars($user['email']) ?></li>
            <li>パスワード: ●●●●●●</li>
            <li>お届け先住所: <?= htmlspecialchars($user['address']) ?></li>
        </ul>
    </div>

    <!-- 注文履歴 -->
    <div class="order-section">
        <h2>注文履歴</h2>
        <?php if (count($orders) > 0): ?>
            <?php foreach ($orders as $order): ?>
                <div class="order-list">
                    <p>注文日時: <?= htmlspecialchars($order['order_date']) ?></p>
                    <img src="<?= htmlspecialchars($order['goods_image']) ?>" alt="商品画像" width="50">
                    <p>カテゴリー: <?= htmlspecialchars($order['goods_category']) ?></p>
                    <p>商品について: <?= htmlspecialchars($order['goods_name']) ?></p>
                    <p><?= number_format($order['goods_price']) ?>円</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>注文履歴がありません。</p>
        <?php endif; ?>
    </div>

    <!-- ボタン -->
    <div class="buttons-container">
        <button class="button" onclick="window.location.href='login.php'">ログアウト</button>
        <button class="button" onclick="window.location.href='product_list.php'">戻る</button>
    </div>
</body>
</html>
