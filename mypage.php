//マイページ(mypage.html)のソースコード
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>

</head>
<body>
    <h1>マイページ</h1>
<!--qqq-->
    <div class="info-section">
        <h2>アカウント情報の確認</h2>
        <ul class="info-list">
            <li>アカウント名: XXXX</li>
            <li>メールアドレス: ○○○@example.com</li>
            <li>パスワード: ●●●●●●</li>
            <li>お届け先住所: 福岡県福岡市博多区博多駅南1-11-11</li>
        </ul>
    </div>

    <div class="order-section">
        <h2>注文履歴</h2>
        <p>注文日時: XX年XX月XX日 XX:XX:XX</p>
        <div class="order-list">
            <img src="cart.png" alt="商品画像" width="50">
            <p>カテゴリー: XXXX</p>
            <p>商品について: 〜〜〜〜〜〜</p>
            <p>XXXX円</p>
        </div>
    </div>

    <div class="buttons-container">
        <button class="button" onclick="window.location.href='login.php'">ログアウト</button>
        <button class="button red" onclick="window.location.href='login.php'">アカウント削除</button>
        <button class="button" onclick="window.location.href='product-list.php'">戻る</button>
    </div>
</body>
</html>
