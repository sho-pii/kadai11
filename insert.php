<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);

session_start();

//1. POSTデータ取得
$time   = $_POST['title'];
$content  = $_POST['content'];
$user_id = $_SESSION['user_id'];

//2. DB接続します
require_once('model.php');
$pdo = db_connect();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO co_table(user_id, title,content,created_at)VALUES(:user_id, :title, :content,sysdate());');
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':title', $time, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
  header('Location: index.php');
  exit();
}