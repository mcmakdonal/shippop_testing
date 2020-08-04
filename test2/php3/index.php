<?php


echo "<h1>ข้อ 3.1</h1>";


$args = [
    10000 => 15000,
    15000 => 20000,
    "salary" => 30000
];


foreach ($args as $key => $value) {
    $salary = $value;

    if ($salary < 10000) {
        $salary = $salary + 200;
    } elseif ($salary < 11000) {
        $salary += 200;
    } elseif ($salary < 12000) {
        $salary += 300;
    }

    echo "Salary : " . $salary . "<br />";
}

echo "<hr />";

echo "<h1>ข้อ 3.2</h1>";

$args = [
    'mohammad' => [
        'physics' => 35,
        'maths' => 30,
        'chemisty' => 39
    ],
    'qadir' => [
        'physics' => 30,
        'maths' => 32,
        'chemisty' => 29
    ],
    'zaza' => [
        'physics' => 31,
        'maths' => 22,
        'chemisty' => 39
    ]
];

echo "<h3>ข้อ 3.2.1</h1>";
echo '$args["mohammad]["physics"] : ' . $args['mohammad']['physics'];

echo "<hr />";
echo "<h3>ข้อ 3.2.2</h1>";

foreach ($args as $array) {
    foreach ($array as $value) {
        echo $value . "&nbsp;";
    }
}