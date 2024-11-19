<?php
function checkOddEven($number) {
    if ($number % 2 == 0) {
        return "$number is even.";
    } else {
        return "$number is odd.";
    }
}


$number = 9;
$result = checkOddEven($number);
echo $result;
?>
