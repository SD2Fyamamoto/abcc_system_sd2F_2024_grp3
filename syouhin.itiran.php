<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css"/>
    <title>商品一覧</title>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="account-info">
            <img src="./ASOLI.img/ジジ.png" alt="アカウント画像">
            <a href="mypage.html">アカウント</a>
        </div>
        <div class="search">
            <button class="search-button" onclick="window.location.href='search.html'">
                <img src="./ASOLI.img/虫眼鏡.png" alt="検索アイコン">
            </button> 
        </div>
    </div>

    <!-- タイトル -->
    <div class="title">商品一覧</div>

    <!-- 商品リスト -->
    <div class="product-list-container">
        <p>商品をタップして詳細を表示</p>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/ソファスク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：とても座り心地の良いソファーです。</div>
                <div class="price">23,555円</div>
            </div>
        </div>
        <div class="product-item" onclick="window.location.href='product-detail2.html'">
            <img src="./ASOLI.img/椅子スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：シンプルなデザインで老若男女おすすめです。</div>
                <div class="price">1,980円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/棚２　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/食器スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/布団　スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/棚　スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/布団２　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/カーテン　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/鏡　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/机３　保存.jpg" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/机　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：XXXX</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
    </div>

    <!-- フッターボタン -->
    <div class="footer">
        <button onclick="goToLogin()">ログイン画面へ</button>
        <button onclick="window.location.href='kategori.php'">カテゴリーで絞る</button>
    </div>

    <script>
        function goToLogin() {
            window.location.href = "login.html";
        }

        function goToProductDetail() {
            window.location.href = "product-detail.html";
        }
    </script>
</body>
</html>
