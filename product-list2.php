<?php
session_start();
if (!isset($_SESSION['manager_user'])) {
   // 未ログインの場合、ログイン画面にリダイレクト
   header('Location: login.php');
   exit;
}
?>