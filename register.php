
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./CSS/style.css"/>
<title>新規登録</title>
</head>
<body>
<h1>新規登録</h1>
<!-- 登録フォーム -->
<form action="register.php" method="POST">
<label>メールアドレス</label><br>
<input class="input" type="email" name="mail" required><br>
<label>パスワード</label><br>
<input class="input" type="password" name="password" required><br>
<label>ユーザー名</label><br>
<input class="input" type="text" name="name" required><br>
<label>電話番号</label><br>
<input class="input" type="tel" name="tell" required><br>
<label>住所</label><br>
<input class="input" type="text" name="address" required><br>
<!-- 登録ボタンとキャンセルボタン -->
<button class="button" type="button" onclick="window.location.href='login.php'">登録</button>
<button class="button" type="button" onclick="window.location.href='login.php'">キャンセル</button>
</form>
</body>
</html> 