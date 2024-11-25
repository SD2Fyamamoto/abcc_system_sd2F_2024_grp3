<!--商品登録画面(admin_register.html)のソースコード-->
<link rel="stylesheet" href="./CSS/style.css"/>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者新規登録</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
        }
        h1::after {
            content: "";
            display: block;
            width: 50px;
            height: 2px;
            background-color: black;
            margin: 5px auto 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        label {
            font-size: 14px;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .button-common {
            width: 100px;
            padding: 10px;
            margin: 10px auto;
            border: none;
            color: white;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
        }
        .button-blue {
            background-color: blue;
        }
        .button-gray {
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>管理者新規登録</h1>
    <form action="login.html" method="get">
        <label>パスワード</label>
        <input type="password" name="password" required>
        
        <label>ユーザー名</label>
        <input type="text" name="username" required>
        
        <label>管理者ID</label>
        <input type="text" name="admin_id" required>
        
        <!-- 登録ボタンとキャンセルボタン -->
        <button type="submit" class="button-common button-blue">登録</button>
        <button type="button" class="button-common button-gray" onclick="window.location.href='login.html'">キャンセル</button>
    </form>
</body>
</html>
