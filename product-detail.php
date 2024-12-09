<?php
// データベース接続情報
$servername = "localhost";
$username = "root"; // ユーザー名
$password = ""; // パスワード
$dbname = "asoli"; // データベース名

// 接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
}

// 商品IDをURLのクエリ文字列から取得
$goods_id = isset($_GET['goods_id']) ? $_GET['goods_id'] : 1;

// SQL実行
$sql = "SELECT goods_name, goods_image, goods_category, goods_details, goods_price FROM goods WHERE goods_id = $goods_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // データを取得
    $row = $result->fetch_assoc();
    $goods_name = $row['goods_name'];
    $goods_image = $row['goods_image'];
    $goods_category = $row['goods_category'];
    $goods_details = $row['goods_details'];
    $goods_price = $row['goods_price'];
} else {
    echo "商品が見つかりません。";
    exit;
}

$conn->close();
?>

<link rel="stylesheet" href="./CSS/style.css"/>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
</head>
<body>
    <!-- 商品詳細 -->
    <div class="product-detail-container">
        <img src="<?php echo $goods_image; ?>" alt="商品画像" class="product-image">
        <div class="product-info">
            <div>カテゴリー：<?php echo $goods_category; ?></div>
            <div>商品名：<?php echo $goods_name; ?></div>
            <div>価格：<?php echo $goods_price; ?>円</div>
            <div>商品説明：<?php echo $goods_details; ?></div>
        </div>
        <button class="back-button" onclick="goToProductList()">商品一覧画面へ戻る</button>
        <button onclick="window.location.href='purchase.php'">購入する</button>    
    </div>
    <br>
    <div>お届け先：福岡県福岡市博多区 博多駅南1-11-11</div>
    <br>
    <div>お届け予定日 X月X日</div>
    <script>
        function goToProductList() {
            window.location.href = "product-list.php";
        }
    </script>
</body>
</html>

