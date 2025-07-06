<?php
// データベース接続情報
$dsn = 'mysql:host=m*******9.db.sakura.ne.jp;dbname=l*****_t****_****;charset=utf8';
$user = 'l********';
$password = 'H*******5';

try {
    // PDOオブジェクトを作成して接続
    $pdo = new PDO($dsn, $user, $password);

    // エラーモードを例外に設定（バグを見つけやすくする）
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // エラー発生時のメッセージ出力
    exit('DB接続エラー：' . $e->getMessage());
}
?>