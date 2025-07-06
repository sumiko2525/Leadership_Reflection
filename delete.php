<?php
require_once('db_connect.php');

// チェックボックスで送信されたIDの配列を受け取る
if (isset($_POST['delete_ids']) && is_array($_POST['delete_ids'])) {
    $delete_ids = $_POST['delete_ids'];

    // プレースホルダの準備 (?, ?, ?, ...)
    $placeholders = implode(',', array_fill(0, count($delete_ids), '?'));

    // 論理削除（deletedフラグを1にする）
    $sql = "UPDATE leadership_note SET deleted = 1 WHERE id IN ($placeholders)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($delete_ids);
}

// 処理後は一覧ページにリダイレクト
header("Location: view.php");
exit;
