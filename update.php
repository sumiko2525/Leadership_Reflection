<?php
require_once('db_connect.php');

// POSTデータの取得とバリデーション
$id = isset($_POST['id']) ? intval($_POST['id']) : null;
$log_date = $_POST['log_date'] ?? '';
$title = $_POST['title'] ?? '';
$reflection = $_POST['reflection'] ?? '';
$energy_level = $_POST['energy_level'] ?? '';
$trust_level = $_POST['trust_level'] ?? '';
$learning = $_POST['learning'] ?? '';
$next_action = $_POST['next_action'] ?? '';
$emotion = $_POST['emotion'] ?? '';

if (!$id || !$log_date || !$title || !$reflection || $energy_level === '' || $trust_level === '') {
    exit('必須項目が入力されていません');
}

// SQLで更新
$sql = "UPDATE leadership_note
        SET log_date = ?, title = ?, reflection = ?, energy_level = ?, trust_level = ?, learning = ?, next_action = ?, emotion = ?
        WHERE id = ? AND deleted = 0";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $log_date,
    $title,
    $reflection,
    $energy_level,
    $trust_level,
    $learning,
    $next_action,
    $emotion,
    $id
]);

// 一覧ページにリダイレクト
header('Location: view.php');
exit;
