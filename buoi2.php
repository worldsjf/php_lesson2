<?php
//
echo " 1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.<br>";
function checkEven($number) {
    if ($number %2==0 ) {
        return "Số $number là số chẵn";
    } else {
        return "Số $number  là số lẻ";
    }
}
echo checkEven(13);
echo "<br>";
//
echo " 2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.<br>";
function tinhTong($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 20;
echo "Tổng các số từ 1 đến $n là: " . tinhTong($n);
echo "<br>";
// 
echo " 3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.<br>";
function multipTable() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i * $j = $result <br>";
        }
        echo "<br>";
    }
}
echo multipTable();
// 
echo " 4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.<br>";
function checkString($string, $word) {
    $check = strstr($string, $word);
    if ($check !== false) {
        return "Chuỗi '$string' chứa từ '$word'";
    } else {
        return "Chuỗi '$string' không chứa từ '$word'";
    }
}

$string = "dai hoc thuong mai";
$word = "hoc";
echo checkString($string, $word);
echo "<br>";
// 
echo " 5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.<br>";
$array= array(96,317,510,30,33,75,6,11,56);   
		
		$max = max($array);   
		$min = min($array);   
		echo "Giá trị lớn nhất: ".$max."<br>";  
		echo "Giá trị nhỏ nhất: ".$min."<br>";
       
// 
echo " 6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.<br>";
function arrange($array) {
    sort($array);
    return $array;
}
$array = [5, 3, 9, 2, 7, 1];
$arrayArrange = arrange($array);

echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: ";
foreach ($arrayArrange as $value) {
    echo $value . " ";
}
echo "<br>";
// 
echo " 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.<br>";
function factorialCalculation($n) {
    if ($n < 0) {
        return "Không thể tính giai thừa cho số âm";
    }

    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial*= $i;
    }
    return $factorial;
}
$t = 5;
$result = factorialCalculation($t);
echo "Giai thừa của $t là: $result";
echo "<br>";
// 
echo " 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.<br>";
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function findPrimes($start, $end)
{
    $primeNumbers = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primeNumbers[] = $i;
        }
    }
    return $primeNumbers;
}

$start = 1;
$end = 10;
$primeNumbers = findPrimes($start, $end);
echo "Số nguyên tố trong khoảng từ $start đến $end là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}
echo "<br>";
// 9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function sumArray($numbers){
    $sum=0;
    $count=count($numbers);
    for($i=0;$i<$count;$i++){
        $sum+=$numbers[$i];
    }
    return $sum;
}
$numbers=array(2,6,8,9,10);
$sum=sumArray($numbers);
echo "Tổng :".$sum;
echo "<br>";
// 10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($start,$end){
    $f=[];
    $f[0]=0;
    $f[1]=1;
    echo "Các số Fibonacci trong khoảng bắt đầu $start đến $end là:\n";
    if ($start<=$f[0]){
        echo $f[0] ."";    
    }
    for($i=1;$f[$i]<=$end;$i++){
        if ( $f[$i]>=$start){
            echo $f[$i] ."";
        }
        $f[$i+1]=$f[$i]+$f[$i-1];
    }
}
$start=0;
$end=14;
fibonacci($start,$end);
echo "<br>";
// 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function checkArmstrong($n) {
    $sum = 0;
    $num = $n;
    $count = strlen($n);

    while ($num > 0) {
        $digit = $num % 10;
        $sum += pow($digit, $count);
        $num = floor($num / 10);
    }

    if ($sum == $n) {
        return true;
    } else {
        return false;
    }
}

$n = 153;
if (checkArmstrong($n)) {
    echo "$n là số Armstrong";
} else {
    echo "$n không là số Armstrong";
}
echo "<br>";
// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertArray($array,$element,$position){
    //kiểm tra vị trí
    if($position<0||$position>count($array)){
        echo"Không thể chèn";
        return;
    }
    $newArraay=[];
    for($i=0;$i<count($array);$i++){
        if($i==$position){
            $newArray[]=$element;
        }
        $newArray[]=$array[$i];
        echo "mảng sau khi chèn là";
        print_r($newArray);
    }
}
$array=[1,2,3,4,5];
$element=10;
$position=3;
insertArray($array,$element,$position);
echo "<br>";
// 13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicate($array){
    $uniqueArray=array_unique($array);
    return $uniqueArray;
}
$array=[1,2,5,6,7,8,8,7,9];
echo "Mảng sau khi loại bỏ là:\n";
print_r(removeDuplicate($array));
echo "<br>";
// 14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findPosition($array,$element){
    $position=[];
    foreach($array as $index=>$value){
        if ($value===$element){
            $position[]=$index;
        }
    }
    return $position;
}
$array=[2,5,2,6,2,5,6,7,4];
$element=5;
$findElement=findPosition($array,$element);
echo "vị trí giá trị $element trong mảng là:";
foreach($findElement as $position){
    echo $position ."";
}
echo "<br>";
// 15.Viết chương trình PHP để đảo ngược một chuỗi.
function revString($string)
{
    return strrev($string);
}
echo revString("dai hoc thuong mai");
echo "<br>";
// 16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countArray($array){
    return count($array);
}
$array=[1,5,9,10];
echo countArray($array);
echo "<br>";
// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindrome($string){
    if ($string == strrev($string))
        return "đúng";
    else 
        return "không";
}
echo checkPalindrome("deed");
echo "<br>";
// 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countElement($array,$element){
    $count=0;
    foreach($array as $value){
        if ($value == $element){
            $count++;
        }
    }
    return $count;
}
$array=[1,5,8,94,2,7,5];
$element=5;
echo countElement($array,$element);
echo "<br>";
// 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function descend($array){
    rsort($array);
    return $array;
}
$croce=array(7,8,10,6,5,9);
$sorted=descend($croce);
foreach($sorted as $value){
    echo "$value<br>";
}
echo "<br>";
// 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addString($string,$length,$padstring)
{
    return str_pad($string,$length,$padstring, STR_PAD_RIGHT);

}
echo addString("thuong mai",14,"deha");
echo "<br>";
// 21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondMax($array) {
    $length = count($array);

    if ($length < 2) {
        echo "Mảng phải chứa ít nhất 2 phần tử.";
        return;
    }
    rsort($array);

    $secondMax = $array[1];

    if ($array[0] == $secondMax) {
        echo "Không tìm thấy số lớn thứ hai trong mảng.";
    } else {
        echo "Số lớn thứ hai trong mảng là: " . $secondMax;
    }
}

$array = array(18, 73, 89, 1, 7, 80, 8);
findSecondMax($array);
echo "<br>";
// 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.

function divisorMax($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return divisorMax($b, $a % $b);
}

function multiplesMin($a, $b) {
    return ($a * $b) / divisorMax($a, $b);
}

$a = 15;
$b = 40;

echo "Ước số chung lớn nhất là: " . divisorMax($a, $b) . "<br>";
echo "Bội số chung nhỏ nhất là: " . multiplesMin($a, $b);
echo "<br>";

// 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.

function checkPerfect($n){
    $sum = 0; 
 
    for ($i=1;$i<=$n/2; $i++){
         if ($n % $i == 0)
          $sum+=$i;
    }
    if ($sum==$n){
        return true;
    }else{
        return false;
    }
}
$n=6;
if(checkPerfect($n)){
    echo "$n la so hoan hao";
}else{
    echo "$n la so khong hoan hao";
}
echo "<br>"; 
// 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findOddMax($arr)
{
    $odd = null;
    foreach ($arr as $num) {
        if ($num % 2 != 0) { 
            if ($odd === null || $num > $odd) {
                $odd = $num;
            }
        }
    }
    return $odd;
}

$numbers = [91, 5, 9, 12, 3, 10, 8];
$oddmax = findOddMax($numbers);
if ($oddmax !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $oddmax;
} else {
    echo "Không có số lẻ trong mảng.";
}
echo "<br>"; 

// 25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function prime($n)  
{  
 for($x = 2; $x < $n; $x++)  
   {  
      if($n % $x ==0)  
        {  
          return 0;  
        }  
   }  
  return 1;  
}  
$a = prime(8);  
if ($a==0)  
  echo 'Đây không phải là số nguyên tố'."<br>";  
else  
echo 'Đây là số nguyên tố'."<br>";

// 26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
    function findPositive($array)
    {
        $positive=0;
        for($i=0;$i<count($array);$i++){
            if($array[$i]>0 && $array[$i]>$positive){
                $positive=$array[$i];
            }
        }
        return $positive;
    }
    $numbers=[10,20,-8,-1,0,89,-81];
    $positiveLargest=findPositive($numbers);
    if($positiveLargest>0){
        echo " Số dương lớn nhất trong mảng là $positiveLargest";
    }else{
        echo "Không có số dương trong mảng";
    }
    echo "<br>"; 
// 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findNegative($array)
{
    $negative = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < 0 && ($negative===0 || $array[$i] > $negative)) {
            $negative = $array[$i];
        }
    }
    return $negative;
}

$numbers = [10, 20, -8,-1, 0, 89, -81,-2];
$negativeLargest = findNegative($numbers);

if ($negativeLargest !== 0) {
    echo "Số âm lớn nhất trong mảng là: $negativeLargest";
} else {
    echo "Không có số âm trong mảng.";
}
echo "<br>"; 
// 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOdd($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 !== 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 10;
$sum = sumOdd($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sum";
echo "<br>"; 
// 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.

function perfectSquare($num)
{
    if ($num <= 0)
        return false;
    $square = 0;
    $i = 1;
    while ($square <= $num) {
        $square = $i * $i;
        if ($square == $num)
            return true;
        $i++;
    }
    return false;
}

function findPerfectSquares($start, $end)
{
    $perfectSquares = array();
    for ($i = $start; $i <= $end; $i++) {
        if (perfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}

$start = 1; // Giới hạn dưới
$end = 100; // Giới hạn trên

$perfectSquares = findPerfectSquares($start, $end);

if (count($perfectSquares) > 0) {
    echo "Các số chính phương từ $start đến $end là:<br>";
    foreach ($perfectSquares as $square) {
        echo $square . "<br>";
    }
} else {
    echo "Không có số chính phương nào từ $start đến $end.";
}
// 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function containString($string, $contain)
{
    return strstr($string, $contain);
}

$string = "truong dai hoc thuong mai ";
$contain = "dai hoc";

if (containString($string, $contain)) {
    echo "Chuỗi chứa chuỗi con.";
} else {
    echo "Chuỗi không chứa chuỗi con.";
}
echo "<br>";
?>