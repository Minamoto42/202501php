<?php


$a = 1;

function test(): void
{
    global $a;
    echo $a;
    echo '<br>';
}

test();


var_dump($_GET); 
echo '<hr>';
var_dump($_POST); 
echo '<hr>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['username']) &&
        $_POST['username'] === 'admin' &&
        isset($_POST['password']) &&
        $_POST['password'] === '123456'
    ) {
        header('Location: http://127.0.0.1/cod/202501PHP/backend/week2/code/global-var-form.php?isLogin=true', true, 302);
    } else {
        header('Location: http://127.0.0.1/cod/202501PHP/backend/week2/code/global-var-form.php?isLogin=false', true, 302);
    }
}
echo '<hr>';
var_dump($_REQUEST);
echo '<hr>';
$_COOKIE['is_admin'] = true;
var_dump($_COOKIE); 
echo '<hr>';

session_start();
$_SESSION['is_login'] = true;
var_dump($_SESSION); 
echo '<hr>';
var_dump($_FILES); 
echo '<hr>';

var_dump($_SERVER);
echo '<hr>';
var_dump($_ENV); 
echo '<hr>';

