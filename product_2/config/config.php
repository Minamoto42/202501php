<?php
// config/config.php - 数据库配置文件, 定义数据库连接参数


const DATABASE = [
    'DB_HOST' => 'localhost', // 数据库主机
    'DB_NAME' => 'product_202501', // 数据库名称
    'DB_USER' => 'root', // 数据库用户名
    'DB_PASS' => '12345678', // 数据库密码
];

const UPLOAD_IMAGE = [
    'ALLOWED_TYPES' => ['png', 'jpg', 'gif', 'jpeg'], // 允许上传的图片类型
    'MAX_SIZE' => 500000, // 允许上传的图片最大尺寸
    'UPLOAD_DIR' => 'uploads/', // 上传文件的目录
];