<?php

session_start();

// データベース接続情報

$host = 'mysql:host=mysql304.phy.lolipop.lan';

$dbname = 'dbname=LAA1557215-php2024';

$username = 'LAA1557215';

$password = 'Pass0308';

try {

    // PDOでデータベース接続

    $pdo = new PDO("mysql:host=mysql304.phy.lolipop.lan;dbname=LAA1557215-php2024;charset=utf8", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("データベース接続失敗: " . $e->getMessage());

}

// フォームからの入力値を取得

$manager_id = htmlspecialchars($_POST['manager_id'] ?? '');

$m_password = $_POST['password'] ?? '';

// 入力値のバリデーション

if (empty($manager_id) || empty($m_password)) {

    die("管理者IDとパスワードを入力してください。");

}

// データベースからユーザー情報を取得

$sql = "SELECT * FROM asoli_manager WHERE manager_id = :manager_id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':manager_id', $manager_id, PDO::PARAM_STR);

$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($m_password, $user['m_password'])) {

    // ログイン成功

    $_SESSION['manager_user'] = $user['m_user']; // ユーザー名をセッションに保存

    header('Location: product-list2.php');

    exit;

} else {

    // ログイン失敗

    echo "管理者IDまたはパスワードが間違っています。";

}

?> 