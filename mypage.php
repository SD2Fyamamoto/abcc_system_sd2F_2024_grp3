
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>マイページ</title>
</head>
<body>
    <h1>マイページ</h1>

    <!-- アカウント情報 -->
    <div class="info-section">
        <h2>アカウント情報の確認</h2>
        <ul class="info-list">
            <li>アカウント名:3班</li>
            <li>アドレス:1111111@s.asojuku.ac.jp</li>
            <li>パスワード: ●●●●●●</li>
            <li>お届け先住所:福岡県福岡市博多区博多駅南1-11-11</li>
        </ul>
    </div>



    <!-- ボタン -->
    <div class="buttons-container">
        <button class="button" onclick="window.location.href='login.php'">ログアウト</button>
        <button class="button" onclick="window.location.href='user.php'">更新</button>
        <button class="button" onclick="window.location.href='product-list.php'">戻る</button>
    </div>
</body>
</html>
