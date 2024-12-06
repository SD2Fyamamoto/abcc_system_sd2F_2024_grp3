<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./CSS/style.css"/>
<title>ログイン</title>
</head>
<body>
    <div class="asoli">
        ASOLI
    </div>
<div class="h1">
<h1>ログイン</h1>
<form action="login_process.php" method="POST">
</div>
<div>
<label for="mail">メールアドレス</label>
<input class="input" type="email" id="mail" name="mail" required>
</div>
<div>
<label for="password">パスワード</label>
<input class="input" type="password" id="password" name="password" maxlength="7" pattern="\d{7}" required>
</div>
<div>
<button class="button" type="submit">ログイン</button>
<button class="button" type="submit" onclick="'register.php'">新規登録</button>
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
