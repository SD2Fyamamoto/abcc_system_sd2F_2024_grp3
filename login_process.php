<?php
session_start();
// データベース接続情報
$host = 'mysql:host=mysql305.phy.lolipop.lan';

$dbname = 'LAA1557234-php2024;charset=utf8';

$username = 'LAA1557234';

$password = 'Pass1202';

try {
    $pdo=new PDO('mysql:host=mysql305.phy.lolipop.lan;
    dbname=LAA1557234-php2024;charset=utf8','LAA1557234','Pass1202');
} catch (PDOException $e) {
   die("データベース接続失敗: " . $e->getMessage());
}
// フォームからの入力値を取得
$mail = $_POST['mail'] ?? '';
$password = $_POST['password'] ?? '';
// メールアドレス形式のバリデーション (汎用的な形式)
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
   die("メールアドレスの形式が正しくありません。");
}
// パスワードの形式チェック (数字7文字)
if (!preg_match('/^\d{7}$/', $password)) {
   die("パスワードは7桁の数字で入力してください。");
}
// データベース照合
$sql = "SELECT * FROM asoli_user WHERE mail = :mail AND password = :password";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
   // ログイン成功
   $_SESSION['user_name'] = $user['name']; // ユーザー名をセッションに保存
   header('Location: product-list.php');
   exit;
} else {
   // ログイン失敗
   echo "メールアドレスまたはパスワードが間違っています。";
}
?>