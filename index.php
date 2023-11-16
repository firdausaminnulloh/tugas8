<?php
// Operator Perbandingan
var_dump(1 < 5);
echo "</br>"; // Output baris ke-1
echo "1 > 5: " . (1 > 5) . "</br>"; // Output baris ke-2
echo "1 <= 5: " . (1 <= 5) . "</br>"; // Output baris ke-3
echo "1 >= 5: " . (1 >= 5) . "</br>"; // Output baris ke-4
echo "1 == 5: " . (1 == 5) . "</br>"; // Output baris ke-5
echo "1 != 5: " . (1 != 5) . "</br>"; // Output baris ke-6

// Operator Identitas
var_dump(1 === "1");
echo "</br>"; // Output baris ke-7
echo "1 !== '1': " . (1 !== "1") . "</br>"; // Output baris ke-8

// Operator Logika
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
echo "</br>"; // Output baris ke-9
echo "$x || $x % 2 != 0: " . ($x || $x % 2 != 0) . "</br>"; // Output baris ke-10
?>
