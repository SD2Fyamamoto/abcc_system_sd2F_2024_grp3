<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./CSS/style.css"/>
<style>
/* 見出し周りの背景を削除 */
.header {
  background-color: transparent; /* 背景色を透明に */
  margin-bottom: 20px;
  display: flex;
  flex-direction: column; /* 要素を縦に並べる */
  align-items: center; /* 中央揃え */
  justify-content: center; /* 中央揃え */
  text-align: center; /* 文字列を中央揃え */
}
/* "ASOLI"のスタイルを調整 */
.asoli {
   font-size: 24px;
   font-weight: bold;
   margin-bottom: 10px;
   text-align: center; /* 文字を中央揃え */
}
/* ログイン見出し部分のスタイル調整 */
.h1 h1 {
   font-size: 28px;
   font-weight: bold;
   border: none; /* 不要な線を削除 */
   padding-bottom: 0; /* パディング調整 */
   margin: 0;
   text-align: center;
}
/* ボタン全体を横並びにするスタイル */
.button-container {
   display: flex;
   justify-content: center; /* 中央揃え */
   gap: 10px; /* ボタン間の隙間 */
}
/* ボタンの基本スタイル */
.button {
   padding: 10px 20px;
   font-size: 16px;
   background-color: #007BFF;
   color: white;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   transition: background-color 0.3s ease;
}
.button:hover {
   background-color: #0056b3;
}
/* 入力フィールドのスタイル */
.input {
   display: block;
   width: 100%;
   max-width: 300px;
   padding: 8px;
   margin-bottom: 10px;
   border: 1px solid #ccc;
   border-radius: 4px;
   font-size: 16px;
}
/* フォーム全体の中央揃え */
form {
   text-align: center;
}
</style>
<title>ログイン</title>
</head>
<body>
<div class="header">
<!-- ASOLIの中央揃え -->
<div class="asoli">
<p>ASOLI</p>
</div>
<!-- ログイン見出しの中央揃え -->
<div class="h1">
<h1>ログイン</h1>
</div>
</div>
<form action="login_process.php" method="POST">
<div>
<label for="mail">メールアドレス</label>
<input class="input" type="email" id="mail" name="mail" required>
</div>
<div>
<label for="password">パスワード</label>
<input class="input" type="password" id="password" name="password" maxlength="7" pattern="\d{7}" required>
</div>
<div class="button-container">
<button class="button" type="submit">ログイン</button>
<button class="button" type="button" onclick="window.location.href='register.php'">新規登録</button>
</div>
</form>
</body>
</html>