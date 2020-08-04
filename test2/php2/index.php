<?php

echo "<h1>ข้อ 2.1</h1>";

// start
$salary = 10000;

if ($salary < 10000) {
    $salary = $salary + 200;
} elseif ($salary < 11000) {
    $salary += 200;
} elseif ($salary < 12000) {
    $salary += 300;
}

echo "Salary : " . $salary;
// ได้ 10200 เพราะเข้า else if เพราะ salary น้อยกว่า 11000

echo "<hr />";

echo "<h1>ข้อ 2.2</h1>";

echo "<h3>ข้อ 2.2.1</h3>";


$baht = 100;
echo ($baht == 300) ? "300" : "200";


echo "<hr />";

echo "<h3>ข้อ 2.2.2</h3>";

$score = 9; $age = 10;
echo "Your Score is : " . $score > 10 ? ( $age > 10  ? "Average" : "Exceptional") : ($age > 10 ? "Horrible" : "Average");

// ได้ $score > 10 ได้เป็น false แล้ว ไปทำ $age > 10 ซึ่งก็ได้ false อีก เลยได้ Average มา