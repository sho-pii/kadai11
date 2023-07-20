<?php
ini_set("display_errors", 'On');
error_reporting(E_ALL);

require_once('model.php');

$pdo = db_connect();
$view = get_all_posts($pdo);

require_once('view/top.php');
