<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);

session_start();

require_once('model.php');
loginCheck();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿フォーム｜Mini Blog</title>
  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<!-- マイページナビバー -->
<nav class="navbar navbar-light bg-light">
<div class="container-fluid">
  <form class="d-flex">
    <a class="nav-link active" href="index.php" >トップ</a>
    <a class="nav-link active" href="input.php">入力フォーム</a>
    <a class="nav-link active" href="list.php">自分の投稿一覧</a>
    </form>
    <form class="d-md-flex d-grid justify-content-md-end">
    <a class="btn btn-outline-danger mr-3" href="logout.php" role="button">Logout</a>
</form>
</div>
</nav>
<!--  -->
<main>

  <div class="page  m-5">
      <article class="my-5">
        <h3>タイトルと内容を記入</h3>
        
      </article>
    <div class="wrapper">
      <form method="POST" action="insert.php">
        <fieldset>
          <label class="form-label">タイトル</label>
          <div class="input-group mb-3">
            <input type="text"  class="form-control" name="title">
          </div>
          <label class="form-label">内容</label>
          <div class="input-group mb-3">
            <textarea class="form-control" name="content" style="height: 100px"></textarea>
          </div>
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-outline-warning btn-lg">OK</button>
          </div>
        </fieldset>
      </form>

    </div>
  </div>

</main>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="js/input.js"></script>
</body>
</html>