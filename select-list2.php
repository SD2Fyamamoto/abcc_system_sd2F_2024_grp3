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
            <img src="./ASOLI.img/ジジ.png" alt="アカウント画像">
            <span>アカウント名</span>
        </div>
    </div>

    <!-- タイトル -->
    <div class="title">ベッド</div>

    <!-- 商品リスト -->
    <div class="product-list-container">
        <p>商品をタップして詳細を表示</p>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/布団　スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：敷きベット
                </div>
                <div>商品について：寝心地の良いベッドです。</div>
                <div class="price">44,745円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/布団２.スクpng" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベット</div>
                <div>商品について：色もシンプルで寝心地も良いベットです！</div>
                <div class="price">39,800円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/布団３スク.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベット</div>
                <div>商品について：店長のイチオシ！！</div>
                <div class="price">50,000円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/コンセント付きベッド.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベッド</div>
                <div>商品について：北欧調のシンプルデザイン！スペースを有効活用できる収納付き。</div>
                <div class="price">29,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/コンセント付きすのこベッド.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベッド</div>
                <div>商品について：高さ３段階調整・棚・コンセント・ブックシェルフがついた便利なベッドです。</div>
                <div class="price">15,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/パイプベッド.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベッド</div>
                <div>商品について：シンプルで余計なものがないベーシックタイプ。圧迫感なく配置ができます。</div>
                <div class="price">10,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/カウチベッド.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベッド</div>
                <div>商品について：ユーズド感のある木目調と無機質なアイアンを合わせた、ヴィンテージスタイルのカウチベッド。</div>
                <div class="price">44,990円</div>
            </div>
        </div>
        <div class="product-item" onclick="goToProductDetail()">
            <img src="./ASOLI.img/棚付きすのこベッド.png" alt="商品画像" class="product-image">
            <div class="product-info">
                <div>カテゴリー：ベッド</div>
                <div>商品について：マットレスを置いても使いやすい高さの棚を備えた、頑丈設計のすのこベッド</div>
                <div class="price">15,990円</div>
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