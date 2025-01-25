<?php

$name = '张三'; // 字符串
$age = 18; // 整数

echo $name . "今年 $age 岁了";

<?php

$name = '李华';
$age = 20;
$height = 1.80;
$isMember = false;
$scoresList = [85, 92, 78];
$userInfo = ['name' => '李华', 'age' => 20];

class Person {
    public string $fullName;
    public int $yearsOld;
    protected string $genderType;
    private array $grades = [];

    public function __construct($fullName, $yearsOld) {
        $this->fullName = $fullName;
        $this->yearsOld = $yearsOld;
    }

    public function addGrade(int $grade): void {
        $this->grades[] = $grade;
    }

    public function getGrades(): array {
        return $this->grades;
    }
}

$person = new Person('李华', 20);
echo $person->fullName . "<br>";
$person->addGrade(85);
$person->addGrade(90);
var_dump($person->getGrades());
echo "<br>";

$groupMembers = [
    ['name' => '李华', 'age' => 20],
    ['name' => '张伟', 'age' => 21],
    ['name' => '王芳', 'age' => 22],
];

foreach ($groupMembers as $member) {
    echo $member['name'] . "，年龄：" . $member['age'] . "<br>";
}

$memberDetails = [
    'name' => '李华',
    'age' => 20,
    'grades' => ["语文: 85", "数学: 92", "英语: 78"]
];

foreach ($memberDetails as $key => $value) {
    echo "$key: ";
    var_dump($value);
    echo "<br>";
}

echo "姓名: " . $memberDetails['name'] . "<br>";
echo "年龄: " . $memberDetails['age'] . "<br>";
echo "<ul>";
foreach ($memberDetails as $key => $value) {
    if ($key === 'grades' && is_array($value)) {
        foreach ($value as $grade) {
            echo "<li>$grade</li>";
        }
    }
}
echo "</ul>";

$numX = 12;
$numY = 4;
$sum = $numX + $numY;
$difference = $numX - $numY;
$product = $numX * $numY;
$quotient = $numX / $numY;
$modulus = $numX % $numY;
var_dump($sum, $difference, $product, $quotient, $modulus);
echo "<br>";

if ($numX > 8) {
    echo "大于 8<br>";
} elseif ($numX === 8) {
    echo "等于 8<br>";
} else {
    echo "小于 8<br>";
}

$newXComparison = $numX > 10 ? '大于 10' : '小于等于 10';
echo $newXComparison . "<br>";

for ($counter = 0; $counter < 5; $counter++) {
    echo "第 $counter 次<br>";
}

$count = 0;
while ($count < 3) {
    echo "循环 $count<br>";
    $count++;
}

echo "<hr>";
foreach ($groupMembers as $member) {
    echo $member['name'] . "，年龄：" . $member['age'] . "<br>";
}
