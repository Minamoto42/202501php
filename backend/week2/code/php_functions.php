<?php

$username = "Minamoto.42";
$usernameLength = strlen($username);
echo "The length of username is: $usernameLength <br>";

echo strlen("I live in earth") . "<br>";

$country = "China";
$countryShort = substr($country, 0, 3);
echo "$country short name is: $countryShort <br>";
$str = "Welcome to PHP!";
echo substr($str, 8) . "<br>";
echo substr($str, -4, 3) . "<br>";

$pos = strpos($str, "PHP");
echo "The position of PHP is: $pos <br>";
var_dump(strpos($str, "Python"));
echo "<br>";
$pos = strpos($str, "to", 5);
echo "The position of 'to' is: $pos <br>";

echo "HELLO PHP! 转换成小写: " . strtolower("HELLO PHP!") . "<br>";
echo "php programming 转换成大写: " . strtoupper("php programming") . "<br>";

$replaceStr = str_replace("PHP", "JavaScript", $str, $count);
echo "The replaced string is: $replaceStr <br>";
echo "The replaced count is: $count <br>";

$str = "abcdef";
$md5Str = md5($str);
echo "The MD5 of $str is: $md5Str <br>";

$arr = array("grape", "kiwi", "mango");
$str = implode(", ", $arr);
echo "The imploded string is: $str <br>";

$str = "Hi there, PHP!";
$arr = explode(", ", $str);
var_dump($arr);
echo "<br>";

$str = "  Learn PHP!  ";
$trimmedStr = trim($str);
echo "The trimmed string is: $trimmedStr <br>";
$str = "**PHP is awesome**";
$trimmedStr = trim($str, "*");
echo "The trimmed string is: $trimmedStr <br>";

$arr = array(10, 20, 30, 40, 50);
$count = count($arr);
echo "The count of array is: $count <br>";

$arr = array(5, 10, 15);
array_push($arr, 20, 25);
var_dump($arr);
echo "<br>";

$arr = array(5, 10, 15);
$popValue = array_pop($arr);
echo "The pop value is: $popValue <br>";
var_dump($arr);
echo "<br>";

$arr = array(5, 10, 15);
$shiftValue = array_shift($arr);
echo "The shift value is: $shiftValue <br>";
var_dump($arr);
echo "<br>";

$arr = array(5, 10, 15);
array_unshift($arr, 0);
var_dump($arr);
echo "<br>";

$arr1 = array("red", "blue", "green");
$arr2 = array("yellow", "purple", "orange");
$mergedArr = array_merge($arr1, $arr2);
var_dump($mergedArr);
echo "<br>";
$student1 = array("name" => "Alice", "grade" => "A");
$student2 = array("name" => "Bob", "age" => 21);
$mergedArr = array_merge($student1, $student2);
var_dump($mergedArr);
echo "<br>";

$arr = array(2, 4, 4, 6, 8, 8, 10);
$uniqueArr = array_unique($arr);
var_dump($uniqueArr);
echo "<br>";

$arr = array(100, 200, 300, 400, 500);
$reversedArr = array_reverse($arr);
var_dump($reversedArr);
echo "<br>";

$arr = array(50, 30, 10, 40, 20);
sort($arr);
var_dump($arr);
echo "<br>";
rsort($arr);
var_dump($arr);
echo "<br>";

$arr = array(10, 20, 30, 40, 50);
shuffle($arr);
print_r($arr);
echo "<br>";

$arr = array(10, 20, 30, 40, 50);
$sum = array_sum($arr);
echo "The sum of array is: $sum <br>";

$student = array("name" => "Alice", "age" => 21);
if (array_key_exists("name", $student)) {
    echo "The key name exists in array <br>";
} else {
    echo "The key name does not exist in array <br>";
}

$arr = array(10, 20, 30, 40, 50);
if (in_array(30, $arr)) {
    echo "The value 30 exists in array <br>";
} else {
    echo "The value 30 does not exist in array <br>";
}
var_dump(in_array("30", $arr));
echo "<br>";

$arr = array(10, 20, 30, 40, 50);
$key = array_search(30, $arr);
echo "The key of value 30 is: $key <br>";

$arr = array("x" => 1, "y" => 2, "z" => 3);
$keys = array_keys($arr);
var_dump($keys);
echo "<br>";

$arr = array("x" => 1, "y" => 2, "z" => 3);
$values = array_values($arr);
var_dump($values);
echo "<br>";

$arr = array("one", "two", "three", "four", "five");
$sliceArr = array_slice($arr, 1, 3);
var_dump($sliceArr);
echo "<br>";

$content = file_get_contents("example.txt");
echo "The content of file is: $content <br>";

$data = "Learning PHP is fun!";
file_put_contents("example.txt", $data, FILE_APPEND);

if (file_exists("example.txt")) {
    echo "The file exists <br>";
} else {
    echo "The file does not exist <br>";
}

echo date("Y-m-d H:i:s") . "<br>";

echo time() . "<br>";

$timestamp = strtotime("2025-12-31 23:59:59");
echo "The timestamp is: $timestamp <br>";

$arr = array("name" => "Alice", "age" => 21);
$json = json_encode($arr);
echo "The JSON is: $json <br>";

$json = '{"name":"Alice","age":21}';
$arr = json_decode($json, true);
var_dump($arr);
echo "<br>";

echo abs(-12.34) . "<br>";

echo ceil(4.56) . "<br>";

echo floor(7.89) . "<br>";

echo max(10, 20, 30, 5, -15) . "<br>";

echo min(10, 20, 30, 5, -15) . "<br>";

echo rand(1, 100) . "<br>";
echo rand() . "<br>";

echo round(3.14159, 2) . "<br>";

echo sqrt(144) . "<br>";
?>
