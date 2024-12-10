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
            <img src="./ASOLI.img/neko.png" alt="アカウント画像">
            <a href="mypage.php">アカウント</a>
        </div>
        <div class="search">
            <button class="search-button" onclick="window.location.href='search.php'">
                <img src="./ASOLI.img/虫眼鏡.png" alt="検索アイコン">
            </button> 
        </div>
    </div>

    <!-- タイトル -->
    <div class="title">商品一覧</div>

    <!-- 商品リスト -->
    <div class="product-list-container">
        <p>商品をタップして詳細を表示</p>
        <div class="product-item" data-id="001" onclick="goToProductDetail(10001)">
            <img src="./ASOLI.img/ソファスク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：とても座り心地の良いソファーです。</div>
                <div class="price">23,555円</div>
            </div>
        </div>
        <div class="product-item" data-id="002" onclick="goToProductDetail(10002)">
            <img src="./ASOLI.img/椅子スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子・ソファー</div>
                <div>商品について：シンプルなデザインで老若男女おすすめです。</div>
                <div class="price">1,980円</div>
            </div>
        </div>
        <div class="product-item" data-id="003" onclick="goToProductDetail(10003)">
            <img src="./ASOLI.img/棚２　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：棚</div>
                <div>商品について：お洒落に収納でき、お部屋をさらに見栄え良く変身させます。</div>
                <div class="price">9,110円</div>
            </div>
        </div>
        <div class="product-item" data-id="004" onclick="goToProductDetail(10004)">
            <img src="./ASOLI.img/食器スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：その他（食器）</div>
                <div>商品について：くまのプーさんのついたかわいい食器セットです。</div>
                <div class="price">2,280円</div>
            </div>
        </div>
        <div class="product-item" data-id="005" onclick="goToProductDetail(10005)">
            <img src="./ASOLI.img/布団　スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベッド（敷布団）</div>
                <div>商品について：ひんやりとした夏にぴったりの敷布団です。</div>
                <div class="price">5,660円</div>
            </div>
        </div>
        <div class="product-item" data-id="006" onclick="goToProductDetail(10006)">
            <img src="./ASOLI.img/棚　スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：棚</div>
                <div>商品について：ホワイトのシンプルな棚です。いろんなお部屋にぴったりです。</div>
                <div class="price">3,770円</div>
            </div>
        </div>
        <div class="product-item" data-id="007" onclick="goToProductDetail(10007)">
            <img src="./ASOLI.img/布団２　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベッド</div>
                <div>商品について：シンプルで温かいベッドです。冬に大変おすすめです。</div>
                <div class="price">6,880円</div>
            </div>
        </div>
        <div class="product-item"  data-id="008" onclick="goToProductDetail(10008)">
            <img src="./ASOLI.img/カーテン　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：その他（カーテン）</div>
                <div>商品について：ベージュのシンプルなカーテンです。お部屋をお洒落に仕上げます。</div>
                <div class="price">2,100円</div>
            </div>
        </div>
        <div class="product-item" data-id="010" onclick="goToProductDetail(10009)">
            <img src="./ASOLI.img/鏡　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：その他（鏡）</div>
                <div>商品について：玄関にもお部屋にも飾れる大きな姿見です。</div>
                <div class="price">1,990円</div>
            </div>
        </div>
        <div class="product-item" data-id="011" onclick="goToProductDetail(10010)">
            <img src="./ASOLI.img/机３　保存.jpg" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：机</div>
                <div>商品について：お部屋にもウッドデッキにもピッタリな机です。</div>
                <div class="price">2,830円</div>
            </div>
        </div>
        <div class="product-item" data-id="012" onclick="goToProductDetail(10011)">
            <img src="./ASOLI.img/机　保存.avif" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：机</div>
                <div>商品について：ベランダやウッドデッキなど、外でも雰囲気ピッタリな机です。</div>
                <div class="price">3,440円</div>
            </div>
        </div>
    </div>

    <!-- フッターボタン -->
    <div class="footer">
        <button onclick="goToLogin()">ログイン画面へ</button>
        <button onclick="window.location.href='category_select.php'">カテゴリーで絞る</button>
    </div>

    <script>
        function goToLogin() {
            window.location.href = "login.php";
        }

        function goToProductDetail() {
            window.location.href = "product-detail.php";
        }

        function goToProductDetail(productId) {
            window.location.href = `product-detail.php?id=${productId}`;
        }

    </script>
</body>
</html>
