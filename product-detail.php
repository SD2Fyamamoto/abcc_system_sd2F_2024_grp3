<!--商品詳細画面(product-detail.html)のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>商品詳細</title>
</head>
<body>
    <!-- Header -->
    <div class="header">商品詳細</div>

    <!-- 商品詳細情報 -->
    <div class="product-detail-container">
    <img id="product-image" src="" alt="商品画像" class="product-image">
        <div class="product-info">
            <div id="product-category">カテゴリー：</div>
            <div id="product-name">商品名：</div>
            <div id="product-price">価格：</div>
            <div id="product-description">商品説明：</div>
        </div>
        <button class="back-button" onclick="goToProductList()">商品一覧画面へ戻る</button>
        <button onclick="window.location.href='purchase.php'">購入する</button>    
    </div>
    <br>
    <div>お届け先：福岡県福岡市博多区 博多駅南1-11-11</div>
    <br>
    <div>お届け予定日 X月X日</div>
    <script>
        function goToProductList() {
            window.location.href = "product-list.php";
        }
        function goToProductList() {
            window.location.href = "product-list.php";
        }

        // 商品データ（例）
        const products = {
            10001: {
                category: "椅子・ソファー",
                name: "革製ソファー",
                price: "23,555円",
                description: "とても座り心地の良いソファーです。",
                image: "./ASOLI.img/ソファスク.png"
            },
            10002: {
                category: "椅子・ソファー",
                name: "シンプルチェア",
                price: "1,980円",
                description: "シンプルなデザインで老若男女おすすめです。",
                image: "./ASOLI.img/椅子スク.png"
            }
        };

        // URLパラメータから商品IDを取得
        const urlParams = new URLSearchParams(window.location.search);
        const productId = urlParams.get('id');

        // 商品データを画面に表示
        if (productId && products[productId]) {
            const product = products[productId];
            document.getElementById('product-image').src = product.image;
            document.getElementById('product-category').textContent = `カテゴリー：${product.category}`;
            document.getElementById('product-name').textContent = `商品名：${product.name}`;
            document.getElementById('product-price').textContent = `価格：${product.price}`;
            document.getElementById('product-description').textContent = `商品説明：${product.description}`;
        } else {
            document.body.innerHTML = "<div>商品が見つかりません。</div>";
        }
    </script>
</body>
</html>
