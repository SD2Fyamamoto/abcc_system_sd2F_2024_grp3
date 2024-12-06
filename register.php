<!--利用者新規登録画面(register.html)のソースコード-->
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
    <form action="login.html" method="get">
        <label>メールアドレス</label>
        <input class="input" type="email" name="email" required>
        
        <label>パスワード</label>
        <input class="input" type="password" name="password" required>
        
        <label>ユーザー名</label>
        <input class="input" type="text" name="username" required>
        
        <label>電話番号</label>
        <input class="input" type="tel" name="phone" required>
        
        <label>住所</label>
        <input class="input" type="text" name="address" required>
        
        <!-- 登録ボタンとキャンセルボタン -->
        <button class="button" type="submit" class="register">登録</button>
        <button class="button" type="button" class="cancel" onclick="window.location.href='login.php'">キャンセル</button>
    </form>
</body>
</html>
