<?php
session_start();
//データベースに接続
try {
    $pdo = new PDO('mysql:host=mysql305.phy.lolipop.lan;
    dbname=LAA1557212-php2024;charset=utf8',
    'LAA1557212',
    'Pass0521' ); // 適切なユーザー名とパスワードを入力
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
<div class="h1">
<h1>管理者ログイン</h1>
<form action="admin_login_process.php" method="POST">
<div class="input">
<label for="manager_id">管理者ID</label>
<input type="text" id="manager_id" name="manager_id" maxlength="7" pattern="\d{7}" required>
</div>
<div class="input">
<label for="password">パスワード</label>
<input type="password" id="password" name="password" maxlength="7" pattern="\d{7}" required>
</div>
<div class="button">
<button type="submit">ログイン</button>
</div>
</form>
    <div class="container">
        <div>管理者ID</div>
        <input type="text" placeholder="入力してください">
        
        <div>パスワード</div>
        <input type="password" placeholder="パスワードを入力してください">
        
        <button class="button login-button" one-click="product-list2.php">ログイン</button>
        <button class="button admin-register-button">管理者新規登録</button>
    </div>
</body>

</html>
<!--あ-->
<!--test同期-->

<!--ロリポップアカウント情報
田嶋
    $pdo = new PDO('mysql:host=mysql305.phy.lolipop.lan;
   dbname=LAA1557234-php2024;charset=utf8',
   'LAA1557234',
   'Pass1202' );

   



-->
