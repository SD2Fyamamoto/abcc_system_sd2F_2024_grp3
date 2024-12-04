<link rel="stylesheet" href="./CSS/style.css"/>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
</head>
<body>
    <h1>商品登録</h1>
    <form action="register-complete.php" method="post">
        <p>商品名を入力</p>
        <input type="text" name="product_name" style="width: 100%; padding: 10px; margin-bottom: 10px;">

        <p>画像を選択</p>
        <input type="file" name="product_image" style="width: 100%; padding: 10px; margin-bottom: 10px;">

        <p>値段を入力</p>
        <input type="number" name="product_price" style="width: 100%; padding: 10px; margin-bottom: 10px;">

        <p>カテゴリを入力</p>
        <input type="text" name="product_category" style="width: 100%; padding: 10px; margin-bottom: 10px;">

        <p>詳細を入力</p>
        <textarea name="product_detail" style="width: 100%; padding: 10px; margin-bottom: 10px;" rows="4"></textarea>

        <button type="submit" style="background-color: blue; color: white; border: none; padding: 10px 20px;">登録</button>
        <button type="button" onclick="location.href='admin-mypage.html'" style="background-color: lightgray; color: black; border: none; padding: 10px 20px;">キャンセル</button>
    </form>
</body>
</html>
