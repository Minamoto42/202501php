<?php
$greetingMessage = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = htmlspecialchars(trim($_POST["username"])); 
    $password = htmlspecialchars(trim($_POST["password"])); 

    if (!empty($userName) && !empty($password)) {
        $greetingMessage = "你好，" . $userName . "！您的密码已成功提交。";
    } else {
        $greetingMessage = "请填写完整的姓名和密码！";
    }
}
?>

<?php
echo "PHP is working!";
?>