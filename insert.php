<?php
require_once('db_connect.php');

// POSTデータを受け取る
$log_date     = $_POST['log_date'];
$title        = $_POST['title'];
$reflection   = $_POST['reflection'];
$energy_level = $_POST['energy_level'];
$trust_level  = $_POST['trust_level'];
$learning     = $_POST['learning'];
$next_action  = $_POST['next_action'];
$emotion      = $_POST['emotion'];

// SQL準備（deletedは初期値0）
$sql = "INSERT INTO leadership_note (
    log_date, title, reflection, energy_level, trust_level,
    learning, next_action, emotion, deleted, created_at, updated_at
) VALUES (
    :log_date, :title, :reflection, :energy_level, :trust_level,
    :learning, :next_action, :emotion, 0, NOW(), NOW()
)";

// 実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':log_date', $log_date);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':reflection', $reflection);
$stmt->bindValue(':energy_level', $energy_level, PDO::PARAM_INT);
$stmt->bindValue(':trust_level', $trust_level, PDO::PARAM_INT);
$stmt->bindValue(':learning', $learning);
$stmt->bindValue(':next_action', $next_action);
$stmt->bindValue(':emotion', $emotion);
$stmt->execute();

// 登録後に表示ページなどへリダイレクト（必要なら view.php に変更）
header("Location: index.php");
exit;
?>
