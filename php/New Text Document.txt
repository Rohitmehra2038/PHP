<?php
                                                                   // Number to reverse
$number = 12521;
$reversedNumber = 0;

while ($number > 0) {
    $lastDigit = $number % 10;                                  // Get the last digit
    $reversedNumber = ($reversedNumber * 10) + $lastDigit;      // Append last digit to reversed number
    $number = (int)($number / 10);                             // Remove the last digit from the number
}

echo "Reversed Number: " . $reversedNumber;
?>
