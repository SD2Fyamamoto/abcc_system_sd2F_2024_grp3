<!--管理者マイページ画面(admin-mypage.html)のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>管理者マイページ</title>
    
</head>
<body>
    <div class="profile">
        <img src="./ASOLI.img/neko.png" alt="アカウント画像">
        <span>アカウント名</span>
    </div>
    <h1>マイページ</h1>

    <button class="button" onclick="window.location.href='user-list.php'">ユーザー一覧</button>
    <button class="button" onclick="window.location.href='product-register.php'">商品登録</button>
    <button class="button" onclick="window.location.href='admin_login.php'">ログアウト</button>
    <button class="button" onclick="window.location.href='product-list.php'">商品一覧へ戻る</button>
</body>
</html>
  
            