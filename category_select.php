<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>カテゴリ選択</title>
<style>
       /* スタイル調整 */
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
           align-items: center;
           gap: 10px;
       }
       .buttons-container {
           display: flex;
           justify-content: center;
           margin-top: 20px;
           gap: 10px;
       }
       button {
           padding: 10px 20px;
           font-size: 16px;
           background-color: #007bff;
           color: #fff;
           border: none;
           border-radius: 5px;
           cursor: pointer;
       }
       button:hover {
           background-color: #0056b3;
       }
</style>
</head>
<body>
<h1>商品検索</h1>
<h3>カテゴリを選択してください</h3>
<form id="categoryForm" method="post">
<div class="radio-container">
<label>
<input type="radio" name="category" value="select-list1.php" required> ソファー・椅子
</label>
<label>
<input type="radio" name="category" value="select-list2.php"> ベッド
</label>
<label>
<input type="radio" name="category" value="select-list3.php"> 机
</label>
<label>
<input type="radio" name="category" value="select-list4.php"> 棚
</label>
<label>
<input type="radio" name="category" value="select-list5.php"> その他
</label>
</div>
<div class="buttons-container">
<button type="button" onclick="submitForm()">検索</button>
</div>
</form>
<script>
       // フォーム送信先を動的に設定するスクリプト
       function submitForm() {
   const form = document.getElementById('categoryForm');
   const selectedCategory = document.querySelector('input[name="category"]:checked');
   if (selectedCategory) {
       console.log("選択されたカテゴリ:", selectedCategory.value); // デバッグ
       form.action = selectedCategory.value;
       form.submit();
   } else {
       alert('カテゴリを選択してください。');
   }
}
</script>
</body>
</html>