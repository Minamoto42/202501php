<?php
// models/Product.php - 商品模型类，包含商品相关的数据库操作

require_once BASE_PATH . 'databases/db.php';

class Product {
    private $conn; // 数据库连接

    // 构造函数，初始化数据库连接
    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    // 添加商品方法
    public function addProduct($name, $price, $description, $image) {
        // 插入商品的 SQL 语句
        $sql = "INSERT INTO products (name, price, description, image) VALUES (:name, :price, :description, :image)";
        $stmt = $this->conn->prepare($sql);
        // 绑定参数
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        // 执行语句并检查结果
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // 获取所有商品方法
    public function getAllProducts() {
        // 查询所有商品的 SQL 语句
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->query($sql);
        // 检查是否有数据
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    // 根据 ID 获取商品方法
    public function getProductById($id) {
        // 查询指定 ID 商品的 SQL 语句
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        // 绑定参数
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        // 检查是否有数据
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }

    // 更新商品方法
    public function updateProduct($id, $name, $price, $description, $image) {
        // 更新商品的 SQL 语句
        $sql = "UPDATE products SET name = :name, price = :price, description = :description, image = :image WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        // 绑定参数
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        // 执行语句并检查结果
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // 删除商品方法
    public function deleteProduct($id) {
        // 删除商品的 SQL 语句
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        // 绑定参数
        $stmt->bindParam(':id', $id);
        // 执行语句并检查结果
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>