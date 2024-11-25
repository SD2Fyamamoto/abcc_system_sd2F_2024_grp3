<!--管理者マイページ画面(admin-mypage.html)のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>管理者マイページ</title>
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
        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .profile span {
            font-size: 16px;
            font-weight: bold;
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: blue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin: 10px 0;
            width: 200px;
        }
        .button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="profile">
        <img src="./ASOLI.img/ジジ.png" alt="アカウント画像">
        <span>アカウント名</span>
    </div>
    <h1>マイページ</h1>

    <button class="button" onclick="window.location.href='user-list.html'">ユーザー一覧</button>
    <button class="button" onclick="window.location.href='product-register.html'">商品登録</button>
    <button class="button" onclick="window.location.href='login.html'">ログアウト</button>
    <button class="button" onclick="window.location.href='product-list.html'">商品一覧へ戻る</button>
</body>
</html>
  
            