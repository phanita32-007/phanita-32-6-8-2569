<?php
echo "<h3>--- ส่วนที่ 1: แปลงค่าองศา C เป็น F ด้วย while loop ---</h3>";

$celsius = 0; 

while ($celsius <= 10) {

    $fahrenheit = ($celsius * 1.8) + 32;
    
    
    echo $celsius . " °C = " . $fahrenheit . " °F<br>";
    
    $celsius++; 
}

echo "<hr>"; 

echo "<h3>--- ส่วนที่ 2: แสดงเลขคู่ 2 ถึง 20 ด้วย do while loop ---</h3>";

$number = 2; 

do {
    echo $number . " "; 
    
    $number += 2; 
} while ($number <= 20); 

?>