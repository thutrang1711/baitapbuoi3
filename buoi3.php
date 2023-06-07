<?php
$number = 21;
//câu 1-----------------
echo "<br>bai1<br>";
function check($number){
    if ($number % 2 == 0)
        echo "{$number} là số chẵn <br>";
    else
        echo "{$number} là số lẻ <br>";
    return;
}
check($number);
echo "<br/>";

//câu 2-----------------
echo "<br>bai2<br>";
function sum($n){
$tong = 0;
for ($i = 1; $i <= $n; $i++)
{
    $tong = $tong + $i;
}
return $tong;
}
$n=19;
echo "Tổng là: ". sum($n);
echo '<br/>';

//câu 3-----------------
echo "<br>bai3<br>";
function lapBCC() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i:";
        echo "<br/>";
        for ($j = 1; $j <= 9; $j++) {
            echo "$i x $j = " . $i * $j . "<br />";
        }
        echo "\n";
    }
}
lapBCC();

//cau 4
echo "<br>bai4<br>";
function testString(){
    $petName = "meo";
    $myString = "Toi co nuoi mot con meo";
    if(strpos($myString, $petName) !== false){
        echo "Word Found!". "<br />";
    } else{
        echo "Word Not Found!". "<br />";
    } 
}
testString();

//cau 5
echo "<br>bai5<br>";
function findMinMax($firstArray){
$max = max($firstArray);
$min = min($firstArray);
echo "Giá trị lớn nhất: ".$max."<br />";  
echo "Giá trị nhỏ nhất: ".$min."<br />";  
}
$firstArray = array(50,100,8,34,7334,6);
findMinMax($firstArray);

//cau 6
echo "<br>bai6<br>";
function arrangeArray($firstArray){
    echo "Mảng sắp xếp theo thứ tự tăng dần:"."<br />";
    sort($firstArray);
    print_r($firstArray);
    echo "<br />";
}
arrangeArray($firstArray);

//cau 7
echo "<br>bai7<br>";
function tinhGiaithua($n) {
    $giaithua = 1;
    if ($n == 0 || $n == 1) {
        return $giaithua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giaithua *= $i;
        }
        return $giaithua;
    }
}
$secondNumber = 5;
echo ( $secondNumber . "! = " . tinhGiaithua ($secondNumber) . "<br />");

//cau 8 
echo "<br>bai8<br>";
function checkPrime($n) {
    if ($n < 2) {
        return false;
    }
    for($i = 2; $i <= sqrt($n); $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function showPrime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(checkPrime($i)==true)
            echo $i, '<br>';
    }
}
echo ("Các số nguyên tố trong khoảng (".$secondNumber.";".$number.")"."<br />");
showPrime(5, 21);

//cau 9
echo "<br>bai9<br>";
function sumArray($n){
    echo array_sum($n);
}
echo "Tổng các giá trị trong mảng là: "."<br />";
sumArray($firstArray);
echo "<br />";

// cau 10
echo "<br>bai10<br>";
function inFibonacci($n)
{
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$start = 0; // Giá trị bắt đầu
$end = 10; // Giá trị kết thúc

$fibonacci = inFibonacci($end);

echo "Các số Fibonacci từ $start đến $end là: ";
for ($i = $start; $i <= $end; $i++) {
    echo $fibonacci[$i] . " ";
}



// cau 11
echo "<br>bai11<br>";
function ArmstrongNumber($number)
{
    $sum = 0;
    $temp = $number;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit ** strlen((string)$number);
        $temp = (int)($temp / 10);
    }
    
    return $number == $sum;
}
$firstNumber = "114716"; 
if (ArmstrongNumber($firstNumber)) {
    echo $firstNumber . " là số Armstrong.";
} else {
    echo $firstNumber . " không là số Armstrong.";
}

//cau12
echo "<br>bai12<br>";
    function insertArray($array, $element, $id){
        if ($id < 0 || $id > count($array)) {
            echo "Vị trí chèn không hợp lệ.";
            return $array;
        }
        $arrayInsert = array();
        for ($i = 0; $i < count($array); $i++) {
            if ($i === $id) {
                $arrayInsert[] = $element;
            }
            $arrayInsert[] = $array[$i];
        }
        if ($id === count($array)) {
            $arrayInsert[] = $id;
        }
    
        return $arrayInsert;
    }
    $fourthArray = array(1, 2, 3, 4, 5);
    $element = 10;
    $id = 2;
    $finalResult = insertArray($fourthArray, $element, $id);
    print_r($finalResult);
    
//cau 13
echo "<br>bai13<br>";
function removeDuplicates($array) {
    $result = array();
    foreach ($array as $element) { 
        if (!in_array($element, $result)) { //element không tồn tại trong result
            $result[] = $element;
        }
    }
    return $result;
}
$secondArray = array("cho", "meo", "pet" => "ga", "ga", "cho");
$resultC13 = removeDuplicates($secondArray);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp: " . implode(", ", $resultC13);
echo "<br>";


//cau14
echo "<br>bai14<br>";
function findElementPosition($array, $element) {
    $positions = array();
    foreach ($array as $key => $value) { //key: lưu trữ chỉ số, value: lưu trữ giá trị
        if ($value === $element) {
            $positions[] = $key;
        }
    }
    return $positions;
}
$secondElement = "cho";
$positions = findElementPosition($secondArray, $secondElement);
echo "Phần tử cần tìm: $secondElement <br>";
if (empty($positions)) {
    echo "Không tìm thấy phần tử trong mảng.";
} else {
    echo "Vị trí của phần tử trong mảng: " . implode(", ", $positions);
}
echo "<br>";

//cau15
echo "<br>bai15<br>";
function daoNguoiChuoi($string){
    $result = '';
    $lenght = strlen($string);
    for ($i = $lenght - 1; $i >= 0; $i--) {
        $result .= $string[$i];
    }
    return $result;
}
$firstString = "Thu Trang";
$resultC15 = daoNguoiChuoi($firstString);
echo $resultC15;
echo "<br>";

//cau 16
echo "<br>bai16<br>";
function countElements($array){
    $count = 0;
    foreach ($array as $element) {
        $count++;
    }
    return $count;
}
$count = countElements($secondArray);
echo "Mảng ban đầu: " . implode(", ", $secondArray) . "\n";
echo "Số lượng phần tử trong mảng: " . $count;

//cau 17
echo "<br>bai17<br>";
function testPalindrome($string)
{
    $length = strlen($string);

    for ($i = 0; $i < $length / 2; $i++) {

        if ($string[$i] != $string[$length - $i - 1]) {

            return false;
        }
    }

    return true;
}
$secondString = "mom";
$testPalindrome = testPalindrome($secondString);
echo "Chuỗi ban đầu: " . $secondString . "\n";
echo "Kết quả: " . ($testPalindrome ? "Chuỗi là Palindrome" : "Chuỗi không là Palindrome");
echo "<br />";

//cau 18
echo "<br>bai18<br>";
function countElement($array, $element){
    $count = 0;
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }
    return $count;
}
$elementCount = "cho";
$test = countElement($secondArray, $elementCount);
echo "Số lần xuất hiện của phần tử " . $elementCount . " trong mảng là: " . $test;
echo "<br />";
//cau 19
echo "<br>bai19<br>";
function arrangeFirstArray($array){
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
$arrange = arrangeFirstArray($firstArray);
echo "Mảng ban đầu: " . implode(", ", $firstArray) . "<br>";
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: " . implode(", ", $arrange);
echo "<br />";
//cau 20
echo "<br>bai20<br>";
function addElementBegin($arr, $element){
    $result = array();
    $result[] = $element;
    foreach ($arr as $value) {
        $result[] = $value;
    }
    return $result;
}
function addElementEnd($arr, $element){
    $result = $arr;
    $result[] = $element;
    return $result;
}
$addBegin = addElementBegin($secondArray, "--");
$addEnd = addElementEnd($secondArray, "vit");

echo "Mảng ban đầu: ";
foreach ($secondArray as $value) {
    echo $value . " "."<br>";
}
echo "\nMảng sau khi thêm phần tử vào đầu: ";
foreach ($addBegin as $value) {
    echo $value . " "."<br>";
}
echo "\nMảng sau khi thêm phần tử vào cuối: ";
foreach ($addEnd as $value) {
    echo $value . " " ."<br>";
}

//cau 21
echo "<br>bai21<br>";
$myArray = [4, 12, 5, 8, 2, 10, 3]; 
echo "cho mảng: " . implode(", ", $myArray) . "<br>";
rsort($myArray);
$secondLargest = $myArray[1]; 
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
//22
echo "<br><br>bai22<br>";
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findLCM($a, $b) {
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$number1 = 12;
$number2 = 18;
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);
echo "Ước số chung lớn nhất của $number1 và $number2 là: $gcd<br>";
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: $lcm";
//23
echo "<br><br>bai23<br>";
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}
$number = 28;
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không là số hoàn hảo.";
}
//24
echo "<br><br>bai24<br>";
function findLargestOddNumber($arr) {
    $largestOdd = null;
    foreach ($arr as $num) {
        if ($num % 2 != 0 && ($largestOdd === null || $num > $largestOdd)) {
            $largestOdd = $num;
        }
    }
    return $largestOdd;
}
$numbers = [4, 12, 5, 8, 2, 10, 3];
echo "cho mảng: " . implode(", ", $numbers) . "<br>";
$largestOddNumber = findLargestOddNumber($numbers);
if ($largestOddNumber !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOddNumber";
} else {
    echo "Không có số lẻ trong mảng.";
}
//25
echo "<br><br>bai25<br>";
function isPrimeNumber($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 17;
if (isPrimeNumber($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không là số nguyên tố.";
}

//26
echo "<br><br>bai26<br>";
function findLargestPositiveNumber($arr) {
    $largestPositive = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive === null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    return $largestPositive;
}
$numbers = [-3, 5, 9, -1, 7, 0, 8];
echo "cho mảng: " . implode(", ", $numbers) . "<br>";
$largestPositiveNumber = findLargestPositiveNumber($numbers);
if ($largestPositiveNumber !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositiveNumber";
} else {
    echo "Không có số dương trong mảng.";
}
//27
echo "<br><br>bai27<br>";
function findLargestNegativeNumber($arr) {
    $largestNegative = null;
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative === null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    return $largestNegative;
}
$numbers = [-3, 5, -9, -1, 7, 0, -8];
echo "cho mảng: " . implode(", ", $numbers) . "<br>";
$largestNegativeNumber = findLargestNegativeNumber($numbers);
if ($largestNegativeNumber !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegativeNumber";
} else {
    echo "Không có số âm trong mảng.";
}
//28
echo "<br><br>bai28<br>";
function sumOfOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$sumOfOdd = sumOfOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sumOfOdd";
//29
echo "<br><br>bai29<br>";
function findPerfectSquares($start, $end) {
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int) sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 20;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương từ $start đến $end là: ";
echo implode(", ", $perfectSquares);
//30
echo "<br><br>bai30<br>";
function isSubstring($string, $substring) {
    return strpos($string, $substring) !== false;
}
$string = "thu trang la hoc sinh gioi";
$substring = "thu trang";
if (isSubstring($string, $substring)) {
    echo "$substring là chuỗi con của $string.";
} else {
    echo "$substring không là chuỗi con của $string.";
}

?>


