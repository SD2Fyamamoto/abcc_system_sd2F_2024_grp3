<!--管理者新規登録画面(admin_register.html)のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>管理者新規登録</title>
    
</head>
<body>
    <h1>管理者新規登録</h1>
    <form action="login.php" method="get">
        <label>パスワード</label>
        <input type="password" name="password" required>
        
        <label>ユーザー名</label>
        <input type="text" name="username" required>
        
        <label>管理者ID</label>
        <input type="text" name="admin_id" required>
        
        <!-- 登録ボタンとキャンセルボタン -->
        <button type="submit" class="button-common button-blue">登録</button>
        <button type="button" class="button-common button-gray" onclick="window.location.href='roguin.php'">キャンセル</button>
    </form>
</body>
</html>
