<?php

$s = "xabcdey";
$x = "ab*de";

function splitWord($s, $x, $offset = 0) {

    $values = explode('*', $x);
    $firstLen = count_chars(current($values));
    $secondLen = count_chars(end($values));

    if (($firstLen + 2) === $secondLen) {

    }
}


function firstOcurrence($s, $x) {
    if (stripos($x, '*')) {
        return splitWord($s, $x);
    }

    return stripos($s, $x);
}

echo firstOcurrence($s, $x) . PHP_EOL;

//echo $s[1];


?>
