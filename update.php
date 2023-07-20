<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);

//1. POSTデータ取得
$title   = $_POST['title'];
$content  = $_POST['content'];
$id     = $_POST['id'];

//2. DB接続します
require_once('model.php');
$pdo = db_connect();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE co_table SET title=:title, content=:content WHERE id=:id;');
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR);
$stmt->bindValue(':content',  $content,  PDO::PARAM_STR);
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    header('Location: list.php');
}
exit();