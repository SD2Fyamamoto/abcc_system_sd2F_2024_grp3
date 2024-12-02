<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理者ログイン</title>
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
