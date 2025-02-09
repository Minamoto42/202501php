<?php
// controllers/ProductController.php - 商品控制器类，处理商品相关的请求

require_once '../models/Product.php';

class ProductController {
    private $productModel; // 商品模型实例

    // 构造函数，初始化商品模型
    public function __construct() {
        $this->productModel = new Product();
    }

    // 商品列表方法
    public function list() {
        // 获取所有商品
        $products = $this->productModel->getAllProducts();
        // 包含商品列表视图
        include '../views/product_list.php';
    }

    // 商品详情方法
    public function detail() {
        // 获取商品 ID
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        // 根据 ID 获取商品
        $product = $this->productModel->getProductById($id);
        // 如果商品存在，包含商品详情视图
        if ($product) {
            include '../views/product_detail.php';
        } else {
            echo "商品不存在。";
        }
    }

    // 处理图片上传的私有方法
    private function uploadImage($file) {
        // 设置上传目录
        $targetDir = "uploads/";
        // 设置目标文件路径
        $targetFile = $targetDir . basename($file["name"]);
        $uploadOk = 1;
        // 获取文件类型
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // 检查文件是否为图像
        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "文件不是图片。";
            $uploadOk = 0;
        }

        // 检查文件是否已经存在
        if (file_exists($targetFile)) {
            echo "抱歉，文件已存在。";
            $uploadOk = 0;
        }

        // 检查文件大小
        if ($file["size"] > 500000) {
            echo "抱歉，您的文件太大。";
            $uploadOk = 0;
        }

        // 允许的文件格式
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "抱歉，只允许 JPG, JPEG, PNG & GIF 文件。";
            $uploadOk = 0;
        }

        // 检查 $uploadOk 是否设置为 0
        if ($uploadOk == 0) {
            echo "抱歉，您的文件未上传。";
            return false;
        } else {
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                echo "文件 " . basename($file["name"]) . " 已成功上传。";
                return $targetFile;
            } else {
                echo "抱歉，上传文件时出错。";
                return false;
            }
        }
    }

    // 添加商品方法
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $price = (float)$_POST['price'];
            $description = htmlspecialchars($_POST['description']);

            // 处理图片上传
            $image = $this->uploadImage($_FILES["image"]);

            if ($image) {
                if ($this->productModel->addProduct($name, $price, $description, $image)) {
                    header('Location: index.php?controller=Product&action=list');
                } else {
                    echo "商品添加失败。";
                }
            }
        } else {
            include '../views/add_product.php';
        }
    }

    // 更新商品方法
    public function update() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $product = $this->productModel->getProductById($id);

        if ($product && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $price = (float)$_POST['price'];
            $description = htmlspecialchars($_POST['description']);
            $image = $product['image'];

            if ($_FILES["image"]["name"]) {
                $image = $this->uploadImage($_FILES["image"]);
            }

            if ($image && $this->productModel->updateProduct($id, $name, $price, $description, $image)) {
                header('Location: index.php?controller=Product&action=list');
            } else {
                echo "商品更新失败。";
            }
        } else {
            include '../views/update_product.php';
        }
    }

    // 删除商品方法
    public function delete() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($this->productModel->deleteProduct($id)) {
            header('Location: index.php?controller=Product&action=list');
        } else {
            echo "商品删除失败。";
        }
    }

    // 购买商品方法
    public function purchase() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $product = $this->productModel->getProductById($id);
        if ($product) {
            include '../views/purchase_product.php';
        } else {
            echo "商品不存在。";
        }
    }

    // 处理购买请求
    public function handlePurchase() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $product = $this->productModel->getProductById($id);
        if ($product && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $quantity = (int)$_POST['quantity'];
            echo "您已成功购买 {$quantity} 个商品：{$product['name']}";
        } else {
            echo "购买失败。";
        }
    }
}
?>