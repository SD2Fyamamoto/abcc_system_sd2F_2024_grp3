<?php

// データベース接続情報

$host = 'localhost';

$dbname = 'your_database';

$username = 'your_username';

$password = 'your_password';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

} catch (PDOException $e) {

    echo "データベース接続エラー: " . $e->getMessage();

    exit;

}

// フォームが送信された場合

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // フォームデータの取得とバリデーション

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $password = $_POST['password'];

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);

    // 必須項目のチェック

    if (!$email || !$password || !$username || !$phone || !$address) {

        $error_message = "全ての項目を正しく入力してください。";

    } else {

        // パスワードのハッシュ化

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // データベースへの登録

        $sql = "INSERT INTO asoli_user (email, password, username, phone, address) 

                VALUES (:email, :password, :username, :phone, :address)";

        $stmt = $pdo->prepare($sql);

        try {

            $stmt->execute([

                ':mail' => $mail,

                ':password' => $hashed_password,

                ':name' => $name,

                ':tell' => $tell,

                ':address' => $address

            ]);

            // 登録成功

            header("Location: login.php");

            exit;

        } catch (PDOException $e) {

            // エラーメッセージの表示

            $error_message = "登録中にエラーが発生しました: " . $e->getMessage();

        }

    }

}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./CSS/style.css"/>
<title>新規登録</title>
</head>
<body>
<h1>新規登録</h1>
<!-- エラーメッセージ -->
<?php if (!empty($error_message)): ?>
<p class="error"><?= htmlspecialchars($error_message) ?></p>
<?php endif; ?>
<form action="register.php" method="post">
<label>メールアドレス</label>
<input type="email" name="mail" required>
<label>パスワード</label>
<input type="password" name="password" required>
<label>ユーザー名</label>
<input type="text" name="name" required>
<label>電話番号</label>
<input type="tel" name="tell" required>
<label>住所</label>
<input type="text" name="address" required>
<!-- 登録ボタンとキャンセルボタン -->
<button type="submit" class="register">登録</button>
<button type="button" class="cancel" onclick="window.location.href='login.php'">キャンセル</button>
</form>
</body>
</html> 