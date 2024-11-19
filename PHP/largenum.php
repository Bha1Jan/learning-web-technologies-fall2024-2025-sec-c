<?php
function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return "$num1 is the largest number.";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return "$num2 is the largest number.";
    } else {
        return "$num3 is the largest number.";
    }
}

$number1 = 15; 
$number2 = 25;
$number3 = 20;

$result = findLargest($number1, $number2, $number3);
echo $result;
?>
