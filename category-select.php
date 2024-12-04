<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category_id'])) {
   $_SESSION['category_id'] = $_POST['category_id'];
   header('Location: product-list-category.php'); // ページをリダイレクト
   exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./CSS/style.css"/>
<title>商品検索</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h3 {
            text-align: center;
        }
        .radio-container {
            display: flex;
            flex-direction: column;
            gap: 15px; /* 各項目の間隔 */
            margin-bottom: 20px;
        }
        .radio-item {
            display: flex;
            align-items: center;
            gap: 10px; /* ラジオボタンとテキストの間隔 */
        }
        .radio-item input[type="radio"] {
            flex-shrink: 0;
        }
        .radio-item label {
            font-size: 16px;
            color: #000; /* ラベルテキストの色を黒に設定 */
            white-space: nowrap; /* テキストを改行させない */
        }
        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
</style>
</head>
<body>
<h1>商品検索</h1>
<br>
<h3>カテゴリを選択してください</h3>
<br>
<form action="product-list-category.php" method="post">
<div class="radio-container">
<div class="radio-item">
<input type="radio" id="category-20001" name="category_id" value="20001" required>
<label for="category-20001">ソファー・椅子</label>
</div>
<div class="radio-item">
<input type="radio" id="category-20002" name="category_id" value="20002">
<label for="category-20002">ベッド</label>
</div>
<div class="radio-item">
<input type="radio" id="category-20003" name="category_id" value="20003">
<label for="category-20003">机</label>
</div>
<div class="radio-item">
<input type="radio" id="category-20004" name="category_id" value="20004">
<label for="category-20004">棚</label>
</div>
<div class="radio-item">
<input type="radio" id="category-20005" name="category_id" value="20005">
<label for="category-20005">その他</label>
</div>
</div>
<div class="buttons-container">
<button type="submit" class="button">検索</button>
<button type="button" class="button" onclick="window.location.href='product-list.php'">戻る</button>
</div>
</form>
</body>
</html>