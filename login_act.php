<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);

//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値を受け取る
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//1.  DB接続します
require_once('model.php');
$pdo = db_connect();

//2. データ登録SQL作成
// IDとWPがあるか確認する。
$stmt = $pdo->prepare(' SELECT * FROM user_table WHERE lid = :lid AND lpw = :lpw ');
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status === false){
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();

//if(password_verify($lpw, $val['lpw'])){ //* PasswordがHash化の場合はこっちのIFを使う
    if ($val['id'] != '') {
        // Login成功時 該当レコードがあればSESSIONに値を代入
        $_SESSION['chk_ssid'] = session_id();

        $user_id = $lid;
        $_SESSION['user_id'] = $user_id;
        header('Location: input.php');
    } else {
        // Login失敗時(Logout経由)
        header('Location: login.php');
    }
    
    exit();