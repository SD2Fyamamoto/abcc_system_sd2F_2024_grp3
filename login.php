<?php
session_start();
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $email = $_POST['email'];
   $password = $_POST['password'];
   // ユーザーをデータベースから取得
   $stmt = $pdo->prepare('SELECT id, username, password, role FROM users WHERE username = ?');
   $stmt->execute([$username]);
   $user = $stmt->fetch(PDO::FETCH_ASSOC);
   if ($user && password_verify($password, $user['password'])) {
       // ログイン成功、セッションに情報を保存
       $_SESSION['user_id'] = $user['id'];
       $_SESSION['username'] = $user['username'];
       $_SESSION['role'] = $user['role'];
       // 役割に応じて遷移
       if ($user['role'] === 'admin') {
           header('Location: product_list.php');
       } else {
           header('Location: product_list2.php');
       }
       exit;
   } else {
       echo 'ログイン失敗: ユーザー名またはパスワードが間違っています。';
   }
}

?>
<!--ログイン画面のソースコード-->
<link rel="stylesheet" href="./CSS/style.css"/>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>ASOLIログイン</title>
</head>
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
<<<<<<< HEAD
<!--test同期-->

<!--ロリポップアカウント情報
田嶋
    $pdo = new PDO('mysql:host=mysql305.phy.lolipop.lan;
   dbname=LAA1557234-php2024;charset=utf8',
   'LAA1557234',
   'Pass1202' );

   



-->
=======
>>>>>>> 39ac47af19dbb9ad98911825532a27b514f3a1fd
