<?php


echo "<h1>ข้อ 1.1</h1>";
echo "<style> div { width: 12px; height: 12px;display: inline-block;} </style>";
$div = 4;
$o = 1;
for($i = 0; $i < 5; $i++) {
    $str_div = "";
    for($x = 0; $x < $div; $x++) {
        $str_div .= "<div></div>";
    }
    $str_o = "";
    for($z = 0; $z < $o; $z++) {
        $str_o .= "O";
    }
    echo $str_div . "" . $str_o;
    echo "<br />";
    $div--;
    $o++;
}

echo "<hr />";

echo "<h1>ข้อ 1.2</h1>";
$div = 4;
$o = 1;
$adding = 0;
for($i = 0; $i < 5; $i++) {
    $str_div = "";
    for($x = 0; $x < $div; $x++) {
        $str_div .= "<div></div>";
    }
    $str_o = "";
    for($z = 0; $z < ( $o + $adding ); $z++) {
        $str_o .= "O";
    }

    echo $str_div . "" . $str_o . "" . $str_div;
    echo "<br />";
    $div--;
    $o++;
    $adding++;
}
