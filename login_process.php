<?php
session_start();
// データベース接続情報
$host = 'mysql305.phy.lolipop.lan'; // 変更する場合は適宜修正
$dbname = 'LAA1557234-php2024'; // あなたのデータベース名
$username = 'LAA1557234'; // あなたのデータベースユーザー名
$password = 'Pass1202'; // あなたのデータベースパスワード
try {
   // PDOでデータベース接続
   $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
   die("データベース接続失敗: " . $e->getMessage());
}
// フォームからの入力値を取得
$manager_id = $_POST['manager_id'] ?? '';
$m_password = $_POST['password'] ?? '';
// 入力値のバリデーション
if (!preg_match('/^\d{7}$/', $manager_id) || !preg_match('/^\d{7}$/', $m_password)) {
   die("不正な入力です。");
}
// データベース照合
$sql = "SELECT * FROM asoli_manager WHERE manager_id = :manager_id AND m_password = :m_password";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':manager_id', $manager_id, PDO::PARAM_STR);
$stmt->bindValue(':m_password', $m_password, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
   // ログイン成功
   $_SESSION['manager_user'] = $user['m_user']; // ユーザー名をセッションに保存
   header('Location: product-list1.php');
   exit;
} else {
   // ログイン失敗
   echo "管理者IDまたはパスワードが間違っています。";
}
?>