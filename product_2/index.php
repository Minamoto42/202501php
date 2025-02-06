<?php
// index.php - 项目入口文件, 负责加载控制器和模型, 并分发请求


// 定义项目根目录
const BASE_PATH = __DIR__ . '/';


// 自动加载控制器和模型
spl_autoload_register(function ($className) {
    if (file_exists('controllers/' . $className . '.php')) {
        include 'controllers/' . $className . '.php';
    } else if (file_exists('models/' . $className . '.php')) {
        include 'models/' . $className . '.php';
    }
});

// 获取 URL 参数, 确定要调用的控制器和方法
$controller = $_GET['controller'] ?? 'Product';
$action = $_GET['action'] ?? 'list';

// 创建控制器实例并调用对应的方法
$controllerName = $controller . 'Controller';
$controller = new $controllerName();
$controller->{$action}();
