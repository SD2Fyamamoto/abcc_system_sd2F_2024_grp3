<!--ユーザー一覧画面(user-list.html)のソースコード-->
<?php
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
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>ユーザー一覧</title>
</head>
<body>
    <h1>ユーザー一覧</h1>
    <div style="background-color: lightgray; padding: 10px;">
        <p>ユーザー一覧</p>
        <ul>
            <li>1111111@s.asojuku.ac.jp</li>
            <li>2222222@s.asojuku.ac.jp</li>
            <li>1234567@gmail.com</li>
        </ul>
    </div>
    <button onclick="location.href='admin-mypage.html'" style="background-color: blue; color: white; border: none; padding: 10px 20px; margin-top: 20px;">マイページに戻る</button>
</body>
</html>
