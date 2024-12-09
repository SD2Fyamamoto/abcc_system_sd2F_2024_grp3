<?php

// データベース接続情報

$host = 'mysql:host=mysql304.phy.lolipop.lan';

$dbname = 'dbname=LAA1557215-php2024';

$username = 'LAA1557215';

$password = 'Pass0308';

try {

    $pdo = new PDO('mysql:host=mysql304.phy.lolipop.lan;dbname=LAA1557215-php2024;charset=utf8', $username, $password);

} catch (PDOException $e) {

    echo "データベース接続エラー: " . $e->getMessage();

    exit;

}

// フォームが送信された場合

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // フォームデータの取得とバリデーション

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    // 必須項目のチェック

    if (!$id || !$password || !$name) {

        $error_message = "全ての項目を正しく入力してください。";

    } else {

        // パスワードのハッシュ化

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // データベースへの登録

        $sql = "INSERT INTO asoli_manager (id, password, name) VALUES (:id, :password, :name)";

        $stmt = $pdo->prepare($sql);

        try {

            $stmt->execute([

                ':id' => $id,

                ':password' => $hashed_password,

                ':name' => $name

            ]);

            // 登録成功時にログインページへリダイレクト

            header("Location: admin_login.php");

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
<title>管理者登録</title>
</head>
<body>
<h1>管理者登録</h1>
<!-- エラーメッセージ -->
<?php if (!empty($error_message)): ?>
<p class="error"><?= htmlspecialchars($error_message) ?></p>
<?php endif; ?>
<!-- 管理者登録フォーム -->
<form action="" method="post">
<label for="id">管理者ID</label>
<input type="text" id="id" name="id" required>
<label for="password">パスワード</label>
<input type="password" id="password" name="password" required>
<label for="username">ユーザー名</label>
<input type="text" id="username" name="username" required>
<!-- 登録ボタンとキャンセルボタン -->
<button type="submit" class="register">登録</button>
<button type="button" class="cancel" onclick="window.location.href='admin_login.php'">キャンセル</button>
</form>
</body>
</html> 