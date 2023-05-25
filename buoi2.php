<?php

// 1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkEven($number) {
    if ($number %2==0 ) {
        return "Số $number là số chẵn";
    } else {
        return "Số $number  là số lẻ";
    }
}
echo checkEven(13);
echo "<br>";

// 2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
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
// 3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
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
// 4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
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
// 5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
$array= array(96,317,510,30,33,75,6,11,56);   
		
		$max = max($array);   
		$min = min($array);   
		echo "Giá trị lớn nhất: ".$max."<br>";  
		echo "Giá trị nhỏ nhất: ".$min."<br>";
       
// 6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.

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
// 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
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
// 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
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
function checkArmstrong($n){
    $sum=0;
    $num=$n;
    $count=strlen($n);
    while ($n>0){
        $digit=$sum % 10;
        $sum+=pow($digit,$count);
        $num=floor($num/10);
    }
    if($sum==$n){
        return true;
    }else {
        return false;
    }
}
$n=153;
if(checkArmstrong($n)){
    echo "$n là số Armstrong";
} else{
    echo "không phải";
}

echo "<br>";
// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
// 13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
// 14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
// 15.Viết chương trình PHP để đảo ngược một chuỗi.
// 16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
// Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
// Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
// Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
// Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
// Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
// Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
// Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
// Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
// Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
// Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
// Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
// Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
// Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
?>