<?php

function sum(int $a, int $b): int
{
    return $a + $b;
}

$result = sum(10, 20);
echo $result . "<br>";

$result = function (int $a, int $b): int {
    return $a + $b;
};
echo $result(10, 20) . "<br>";

$product = fn(int $a, int $b): int => $a * $b;
echo $product(5, 4) . "<br>";

$animals = array("Cat", "Dog", "Elephant");
$animals = ["Cat", "Dog", "Elephant"];
$emptyList = [];
$emptyList = array();
$user = [
    "username" => "Alice",
    "age" => 25,
    "isActive" => true
];
$user = array(
    "username" => "Alice",
    "age" => 25,
    "isActive" => true
);

echo $animals[0] . "<br>";

$animals[0] = "Lion";
echo $animals[0] . "<br>";
var_dump($animals);
echo "<br>";

$animals[] = "Tiger";
var_dump($animals);
echo "<br>";

unset($animals[1]);
$animals = array_values($animals);
var_dump($animals);
echo "<br>";
echo "<hr>";

echo "for 循环遍历数组" . "<br>";
for ($i = 0; $i < count($animals); $i++) {
    echo $animals[$i] . "<br>";
}

echo "<hr>";

echo "foreach 循环遍历数组" . "<br>";
foreach ($animals as $animal) {
    echo $animal . "<br>";
}
