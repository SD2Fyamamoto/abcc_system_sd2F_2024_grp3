<!--商品検索画面(search.html)のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>商品検索</title>
    
</head>
<body>
    <h1>商品検索</h1>
    <br>
    <h3>カテゴリを選択してください</h3>
    <br>
    <form action="product-list-category.php" method="post">
        <div>
            <label>
                <input type="radio" name="category" value="ソファー・椅子" required>ソファー・椅子</label>
        </div>
        <div>
            <label>
                <input type="radio" name="category" value="ベッド" required>ベッド</label>
        </div>
        <div>
            <label>
                <input type="radio" name="category" value="机" required>机</label>
        </div>
        <div>
            <label>
                <input type="radio" name="category" value="棚" required>棚</label>
        </div>
        <div>
            <label>
                <input type="radio" name="category" value="その他" required>その他</label>
        </div>
    </form>
    <div class="buttons-container">
        <button class="button" onclick="window.location.href='product-list.php'">検索</button>
        <button class="button" onclick="window.location.href='product-list.php'">戻る</button>
    </div>
</body>
</html>
