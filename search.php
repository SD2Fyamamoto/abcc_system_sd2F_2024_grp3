//商品検索画面(search.html)のソースコード
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品検索</title>
    
</head>
<body>
    <h1>商品検索</h1>

    <label for="product-name">商品名を入力</label>
    <input type="text" id="product-name" placeholder="商品名を入力">

    <label for="category">カテゴリを入力</label>
    <input type="text" id="category" placeholder="カテゴリを入力">

    <div class="buttons-container">
        <button class="button" onclick="window.location.href='product-list.php'">検索</button>
        <button class="button" onclick="window.location.href='product-list.php'">戻る</button>
    </div>
</body>
</html>
