<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);

session_start();
require_once('model.php');
loginCheck();

//1. POSTデータ取得
$id = $_GET['id'];

//2. DB接続します
require_once('model.php');
$pdo = db_connect();

//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM co_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    header('Location: list.php');
    exit();
}
