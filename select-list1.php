<!--ベッド一覧(bed.html)のソースコード-->
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
            <span>アカウント名</span>
        </div>
    </div>

    <!-- タイトル -->
    <div class="title">ソファー・椅子</div>

    <!-- 商品リスト -->
    <div class="product-list-container">
        <p>商品をタップして詳細を表示</p>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/ソファスク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：座り心地の良いソファーです。</div>
                <div class="price">23,555円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/椅子スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>商品について：シンプルでどこにでも馴染む椅子</div>
                <div class="price">9,800円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/丸椅子スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>商品について：店長のイチオシ！！</div>
                <div class="price">4,100円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/オフィスチェア.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>背中にあわせたラインに加え、疲れやすい腰部分をサポートするクッション付き。</div>
                <div class="price">7,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/コンパクトカジュアルソファー.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：省スペースで､シンプルデザインのカジュアルソファ</div>
                <div class="price">17,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/シェル型チェア.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>商品について：安定した座り心地のチェア。</div>
                <div class="price">7,680円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/2人掛けコンパクトソファー.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：ソファと同生地のクッション(35×35cm)1個付き</div>
                <div class="price">20,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/木製チェア.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：シンプルながら上品なデザインのチェア。</div>
                <div class="price">19,690円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/コンパクトソファー.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：手ざわりがやわらかく、ふんわりとした感触の起毛タイプの生地を使用。</div>
                <div class="price">29,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/コーナーソファーセット.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：生地はサラッとした質感の素材。暮らしに心地よくなじむシンプルなデザインです。</div>
                <div class="price">169,900円</div>
            </div>
        </div>
    </div>

    <!-- フッターボタン -->
    <div class="footer">
        <button onclick="window.location.href='product-list.php'">商品一覧へ</button>
    </div>

    <script>
        function goToLogin() {
            window.location.href = "login.php";
        }

        function goToProductDetail() {
            window.location.href = "product-detail.php";
        }
    </script>
</body>
</html>