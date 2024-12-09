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
                <div class="price">44,750円</div>
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
            <img src="./ASOLI.img/sofa1.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：柔らかな印象を与えてくれるファブリック素材のソファです。</div>
                <div class="price">39,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/sofa2.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：ワンルームにお住まいの方や、1人暮らしのお部屋にぴったりな幅約132cmサイズ。</div>
                <div class="price">29,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/isu.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>商品について：カーブのついたラバーウッドの幅広な背もたれが、心地よくしっかりと支えます。</div>
                <div class="price">8,500円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/isu2.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>商品について：スリムに折りたためるので隙間にも収納しやすい</div>
                <div class="price">1,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/sofa3.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：手ざわりがやわらかく、ふんわりとした感触の起毛タイプの生地を使用。</div>
                <div class="price">29,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/sofa4.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ソファー</div>
                <div>商品について：ハイバックタイプのコンパクトリクライニングソファです。</div>
                <div class="price">21,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/isu3.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>商品について：天然木フレームと高機能PVCが調和したチェア</div>
                <div class="price">19,960円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/ソファー４.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：椅子</div>
                <div>商品について：カジュアルさとインダストリアな印象を併せ持つデザイン。</div>
                <div class="price">50,490円</div>
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