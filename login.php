<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ログイン</title>
</head>
<body>
<h1>ログイン</h1>
<form action="admin_login_process.php" method="POST">
<div>
<label for="manager_id">メールアドレス</label>
<input type="text" id="manager_id" name="manager_id" maxlength="7" pattern="\d{7}" required>
</div>
<div>
<label for="password">パスワード</label>
<input type="password" id="password" name="password" maxlength="7" pattern="\d{7}" required>
</div>
<button type="submit">ログイン</button>
</form>
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
