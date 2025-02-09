<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=product_202501', 'root', '');
    echo '数据库连接成功！';
} catch (PDOException $e) {
    die('数据库连接失败: ' . $e->getMessage());
}
?>

