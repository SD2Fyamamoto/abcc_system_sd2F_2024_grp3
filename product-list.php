<!--商品一覧画面(product-list.html)のソースコード-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ccc;
        }
        .account-info, .search {
            display: flex;
            align-items: center;
        }
        .account-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .search img {
            width: 30px;
            height: 30px;
            margin-left: 5px;
        }
        .title {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        .product-list-container {
            width: 90%;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            overflow-y: auto;
            max-height: 60vh;
        }
        .product-item {
            display: flex;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            align-items: center;
            cursor: pointer;
        }
        .product-image {
            width: 80px;
            height: 80px;
            margin-right: 15px;
        }
        .product-info {
            font-size: 14px;
        }
        .product-info .price {
            font-weight: bold;
        }
        .footer {
            display: flex;
            justify-content: space-around;
            width: 100%;
            padding: 10px;
            position: fixed;
            bottom: 0;
            background-color: #fff;
            border-top: 1px solid #ccc;
        }
        .footer button {
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .footer button:last-child {
            background-color: #6c757d;
        }
    </style>
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
            <img src="./ASOLI.img/カーテンスク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：とても座り心地の良いソファーです。</div>
                <div class="price">23,555円</div>
            </div>
        </div>
        <div class="product-item" onclick="window.location.href='product-detail2.html'">
            <img src="./ASOLI.img/ソファスク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：シンプルなデザインで老若男女おすすめです。</div>
                <div class="price">1,980円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/椅子スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：後ろによっかかることができ、とても座りやすいです。</div>
                <div class="price">999円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/丸椅子スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：丸椅子なので、どこでも使えます。</div>
                <div class="price">799円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/机　スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：机</div>
                <div>商品について：シンプルなデザインです。</div>
                <div class="price">4,999円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/机２スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：机</div>
                <div>商品について：色が黒なので、高級感を感じさせるようなデザインです。</div>
                <div class="price">9,999円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/机３スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：机</div>
                <div>商品について：丸い形で可愛らしいデザインになっております。</div>
                <div class="price">6,999円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/鏡スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：その他</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>  
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/食器スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：その他</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/棚　スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：棚</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/棚２スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：棚</div>
                <div>商品について：～～～</div>
                <div class="price">XXXX円</div>
            </div>
        </div>
    <div class="product-item" onclick="goToProductDetail()">
        <img src="./ASOLI.img/棚３スク.png" alt="商品画像" class="product-image">
        <div class="product-info">
            <div>カテゴリー：棚</div>
            <div>商品について：～～～</div>
            <div class="price">XXXX円</div>
        </div>
    </div>
<div class="product-item" onclick="goToProductDetail()">
    <img src="./ASOLI.img/布団　スク.png" alt="商品画像" class="product-image">
    <div class="product-info">
        <div>カテゴリー：ベット</div>
        <div>商品について：～～～</div>
        <div class="price">XXXX円</div>
    </div>
</div>

<div class="product-item" onclick="goToProductDetail()">
    <img src="./ASOLI.img/布団２.スクpng" alt="商品画像" class="product-image">
    <div class="product-info">
        <div>カテゴリー：ベット</div>
        <div>商品について：～～～</div>
        <div class="price">XXXX円</div>
    </div>
</div>

<div class="product-item" onclick="goToProductDetail()">
    <img src="./ASOLI.img/布団３スク.png" alt="商品画像" class="product-image">
    <div class="product-info">
        <div>カテゴリー：ベット</div>
        <div>商品について：～～～</div>
        <div class="price">XXXX円</div>
    </div>
</div>
</div>
    <!-- フッターボタン -->
    <div class="footer">
        <button onclick="goToLogin()">ログイン画面へ</button>
        <button onclick="window.location.href='category_select.html'">カテゴリーで絞る</button>
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
