<?php
// config/config.php - 数据库配置文件，定义数据库连接参数

// 定义database主机
define('DB_HOST', 'localhost');
// 定义database名称
define('DB_NAME', 'product_db');
// 定义database用户名
define('DB_USER', 'root');
// 定义database密码
define('DB_PASS', '');

// 连接数据库
try {
    // 创建 PDO 实例并设置错误模式
    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // 捕获异常并输出错误信息
    die('连接失败: ' . $e->getMessage());
}
?>