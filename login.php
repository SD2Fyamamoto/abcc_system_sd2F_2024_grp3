<?php
session_start();
require 'login.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 入力値を取得
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if ($email && $password) {
        try {
            // ユーザーを検索
            $stmt = $pdo->prepare('SELECT id, password FROM users WHERE email = :email');
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();
            if ($user && password_verify($password, $user['password'])) {
                // セッションにユーザー情報を保存
                $_SESSION['user_id'] = $user['id'];
                header('Location: mypage.php'); // マイページにリダイレクト
                exit;
            } else {
                $error = 'メールアドレスまたはパスワードが間違っています。';
            }
        } catch (Exception $e) {
            $error = 'エラーが発生しました: ' . $e->getMessage();
        }
    } else {
        $error = 'すべての項目を入力してください。';
    }
 }
//データベースに接続
try {
   $pdo = new PDO('mysql:host=mysql305.phy.lolipop.lan;
   dbname=LAA1557234-php2024;charset=utf8',
   'LAA1557234',
   'Pass1202' ); // 適切なユーザー名とパスワードを入力
} catch (PDOException $e) {
   echo "データベース接続失敗: " . $e->getMessage();
   exit();
}
// データベースからデータを取得

//アカウント情報の判別


?>
<!--ログイン画面のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>ASOLIログイン</title>
</head>
<?php

$sql = $pdo->prepare('SELECT * FROM magazine');
$sql->execute();
$magazines = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <div class="container">
        <div>メールアドレス・または管理者ID</div>
        <input type="text" placeholder="入力してください">
        
        <div>パスワード</div>
        <input type="password" placeholder="パスワードを入力してください">
        
        <button class="button login-button">ログイン</button>
        <button class="button register-button">新規登録</button>
        <button class="button admin-register-button">管理者新規登録</button>
        
        <div class="note">※一般ユーザーは使用できません</div>
    </div>
</body>

</html>
<!--test同期-->

<!--ロリポップアカウント情報
田嶋
    $pdo = new PDO('mysql:host=mysql305.phy.lolipop.lan;
   dbname=LAA1557234-php2024;charset=utf8',
   'LAA1557234',
   'Pass1202' );

   



-->