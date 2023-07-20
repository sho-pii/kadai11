<?php
function db_connect()
{
  try {
    $db_name = 'kadai11'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    return $pdo;
  } catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
  }
}

// ----------
function get_all_posts($pdo)
{
  $stmt = $pdo->prepare('SELECT * FROM co_table  ORDER BY created_at DESC LIMIT 14');
  $status = $stmt->execute();

  $view = '';
  if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
  } else {
    $count = 0; // カウンターを初期化
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $view .= '  <div class="panel"><p class="';
      // 条件によってクラス名を変更
      if ($count === 0) {
        $view .= 'text top-left';
      } elseif ($count === 1) {
        $view .= 'text bottom-right';
      } elseif ($count === 2) {
        $view .= 'speech';
      } elseif ($count === 3) {
        $view .= 'text top-left';
      } elseif ($count === 4) {
        $view .= 'text bottom-right';
      } elseif ($count === 5) {
        $view .= 'speech';
      } elseif ($count === 6) {
        $view .= 'text bottom-right';
      } elseif ($count === 7) {
        $view .= 'text top-left';
      } elseif ($count === 8) {
        $view .= 'speech';
      } elseif ($count === 9) {
        $view .= 'text top-left';
      } elseif ($count === 10) {
        $view .= 'text bottom-right';
      } elseif ($count === 11) {
        $view .= 'speech';
      } elseif ($count === 12) {
        $view .= 'text top-left';
      } else {
        $view .= 'text bottom-right';
      }

      $view .= '">';
      $view .= $result['title'];
      $view .= '</p>';
      $view .= '<p class="contentText">';
      $view .= $result['content'];
      $view .= '</p>';
      $view .= '</div>';

      $count++; // カウンターをインクリメント
    }
    return $view;
  }
}

// ----------
// ログインチェク処理 loginCheck()
function loginCheck()
{
    if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()) {
        exit('LOGIN ERROR <a href="">➡︎login</a>');
    } else {
        session_regenerate_id(true);
        $_SESSION['chk_ssid'] = session_id();
    }
}

// ----------自分の投稿一覧 list.php
function get_my_posts($pdo, $user_id)
{
    $stmt = $pdo->prepare('SELECT * FROM co_table WHERE user_id = :user_id');
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
    $status = $stmt->execute();

    $view = '';
    if ($status == false) {
        sql_error($stmt);
    } else {
        while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $view .= '<tr>';
            $view .= '<th scope="row"><a href="detail.php?id=' . $r["id"] . '">' . h($r['created_at']) . '</a></th>';
            $view .= '<td>' . h($r['title']) . '</td>';
            $view .= '<td>' . h($r['content']) . '</td>';
            $view .= '<td><a class="btn btn-danger" href="#" onclick="showConfirmModal(' . $r['id'] . ')">';
            $view .= '<i class="fa-solid fa-trash-can"></i> 削除</a></td>';
            $view .= '</tr>';
        }
    }

    return $view;
}

// ----------
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}