<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
  text-align:center;
  margin-left:50px
}
h3{
 margin-left:20%
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 6px;
}
</style>
<body>
  <div class="permanant">
<table>
<h3> student information</h3>
 <thead>
<tr>
<th>Name</th>
<th>ID</th>
<th>class</th>
</tr>
 </thead>
 <tbody>
<tr>
<td> Hussein Abdi Hassan Addow</td>
<td>C116085</td>
<td>CA204</td>
</tr>
 </tbody>
</table>
</div>
                
</body>
</html>
<?php
echo "<h4>Question1#:Arithmatict operations</h4>";
$a=10;
$b=8;
$c=$a+$b;
echo " the sum is : ".$c;
echo "<br/>";
$c=$a-$b;
echo " the subract is : ".$c;
echo "<br/>";
$c=$a*$b;
echo " the multply is : ".$c;
echo "<br/>";
$c=$a/$b;
echo " the devision is : ".$c;
echo "<br/>";
$c=$a%$b;
echo " the mod is : ".$c;
echo "<br/>";
echo "<h4>Question2#:compares two integer numbers</h4>";
$num1=10;
$num2=20;
$greatest=($num1>$num2)?$num1:$num2;
echo "greatest one is: " .$greatest;
echo"<br>";
echo "<h4>Question3#:compares three integer numbers</h4>";
$num1 = 10;
$num2 = 5;
$num3 = 8;
$greatest=$num1;
if($num2 >$greatest){
$greatest=$num2;
}
if($num3>$greatest){
$greatest=$num3;
}
$smallest=$num1;
if($num2<$smallest){
$smallest=$num2;
}
if($num3<$smallest){
$num3=$smallest;
}
// Print the results
echo "The greatest number is:  ".$greatest;
echo"<br>";
echo "The smallest number is:  ".$smallest;
echo"<br>";
echo "<h4>Question4#:odd numbers and even numbers</h4>";
$num=10;
if($num % 2 ==0){
  echo "$num is even.";
}
else{
 echo "$num is odd.";
}
echo"<br>";
echo "<h4>Question5#:the number is divisible by 3, 5, both, or none of them</h4>";
$number = 15;
if ($number % 3 == 0 && $number % 5 == 0) {
   echo "$number is divisible by both 3 and 5.";
   }
 elseif ($number % 3 == 0) {
  echo "$number is divisible by 3, but not by 5.";
 } 
 elseif ($number % 5 == 0) {
echo "$number is divisible by 5, but not by 3.";
 } else {
   echo "$number is not divisible by either 3 or 5.";
 }
 echo"<br>";
 echo "<h4>Question6#: program that prints odd numbers from 2 to 20</h4>";
 for($i=2;$i<=2; $i++){
if($i%2 !=0){
   echo$i.""."\n";
}
 }
 echo"<br>";
 echo "<h4>Question7#: program that prints even numbers from 35 to 7</h4>";
 for($i=35;$i>=7; $i--){
    if($i%2 !=0){
    echo$i. ""."\n";
}
 }
 echo"<br>";
 echo "<h4>Question8#:program that prints numbers divisible by 5 from 1 to 50.</h4>";
 for($i=1;$i<=50;$i++){
  if($i%5==0){
 echo $i. "". "\n";
  }
 }
 echo"<br>";
 echo "<h4>Question#9:program that prints numbers divisible by 2 and 5 at the same time from 50 to 2</h4>";
for($i=50;$i>=2;$i--){
 if($i%2==0 && $i%5==0){
 echo $i .""."\n";
 }
}


echo"<br>";
echo "<h4>Question#10:program to find the reverse of a given number (for example, the reverse of 12345 = 54321</h4>";
$num =12345; 
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem; 
$num = ($num / 10);   
}  
echo "Reverse number of 12345 is: $revnum";
echo"<br>";
echo "<h4>Question#11:program that calculates lowest common multiplier (LCM) of two positive integer numbers </h4>";

$p = $x = 20;
$q = $y = 25;

while ($x != $y) {
  if ($x > $y)
    $x = $x - $y; 
  else
    $y = $y - $x;
}
$lcm = ($p*$q)/$x;
echo " LCM of $p and $q is: $lcm";
echo"<br>";
echo "<h4>Question#12:program to find common factors of two positive integer numbers</h4>";
echo"<br>";
// Input two positive integer numbers
$num1 = 42;
$num2 = 70;

// Find the smaller of the two numbers
$min = ($num1 < $num2) ? $num1 : $num2;

// Initialize an array to store common factors
$commonFactors = array();

// Loop through numbers from 1 to the smaller number
for ($i = 1; $i <= $min; $i++) {
    // Check if both numbers are divisible by the current value of $i
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $commonFactors[] = $i; // Add the common factor to the array
    }
}

// Output the common factors
echo "Common factors of $num1 and $num2 are: " .  implode(', ', $commonFactors);
echo "<h4>Question#13:program that calculates highest common factor (HCF) of two integer numbers </h4>";
echo"<br>";
// Input two integers
$number1 = 18;
$number2 = 24;

// Find the absolute values of the two numbers
$number1 = abs($number1);
$number2 = abs($number2);

while ($number2 !== 0) {
    $remainder = $number1 % $number2;
    $number1 = $number2;
    $number2 = $remainder;
}
$hcf = $number1;
echo "The HCF of {$number1} and {$number2} is {$hcf}.";
echo "<h4>Question#14:program that calculates the factorial of a given number.</h4>";
echo"<br>";
$num = 5;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}
echo "The factorial of $num is $factorial";
echo "<h4>Question#15:program that produces multiplication table (up to 12*12)</h4>";
echo"<br>";
// Create a table header
echo"<h2> multiplication table</h2>";
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";

// Create the header row with numbers from 1 to 12
for ($i = 1; $i <= 12; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Create the multiplication table rows
for ($i = 1; $i <= 12; $i++) {
    echo "<tr><th>$i</th>";
    
    for ($j = 1; $j <= 12; $j++) {
        // Calculate the product and display it in the table
        $product = $i * $j;
        echo "<td>$product</td>";
    }
    
    echo "</tr>";
}
// Close the table
echo "</table>";
echo "<h4>Question#16:program that prints whether the number is a prime or non-prime</h4>";
echo"<br>";
// Define the number to check
$num = 29; // Change this to the number you want to check

$isPrime = true;

// Check if the number is less than 2 (prime numbers are greater than 1)
if ($num < 2) {
    $isPrime = false;
} else {
    // Check for factors from 2 to the square root of the number
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
// Print the result
if ($isPrime) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}
echo "<h4>Question#17:program that prints prime (whole number greater than1)</h4>";
echo"<br>";

// Loop through numbers from 10 to 50
for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;

    // Check if the number is less than 2 (not prime)
    if ($num < 2) {
        $isPrime = false;
    } else {
        // Check for divisibility by numbers from 2 to the square root of the number
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    // If $isPrime is still true, the number is prime, so print it
    if ($isPrime) {
        echo $num . " ";
    }
}

echo "<h4>Question#18:program that prints non-prime (whole number greater than 1) </h4>";
echo"<br>";

for ($num = 2; $num <= 25; $num++) {
    $isPrime = true;
    
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    
    if (!$isPrime) {
        echo $num . " ";
    }
}
echo "<h4>Question#19:program that prints prime (whole number greater than 1which is exactly divisible by itself )  </h4>";
echo"<br>";
// Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }

    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }

    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }

    return true;
}

// Loop through numbers from 100 to 6 and print prime numbers
for ($i = 100; $i >= 6; $i--) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<h4>Question#20:program that prints non-prime (whole number greater than 1 which is divisible by itself, 1) </h4>";
echo"<br>";
// Loop from 90 to 12
for ($i = 90; $i >= 12; $i--) {
    $isPrime = true;

    // Check if the current number is divisible by any number other than 1 and itself
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }

    // If the number is not prime, print it
    if (!$isPrime) {
        echo $i . " "."\n";
    }
}
echo "<h4>Question#21:program that solves Quadratic Equations </h4>";
echo"<br>";

// Input coefficients
$a = 1;
$b = -3;
$c = 2;

// Calculate the discriminant
$discriminant = ($b * $b) - (4 * $a * $c);

// Check if the discriminant is positive, zero, or negative
if ($discriminant > 0) {
    // Two real solutions
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo "The solutions are x1 = $x1 and x2 = $x2";
} elseif ($discriminant == 0) {
    // One real solution (a repeated root)
    $x1 = -$b / (2 * $a);
    echo "The solution is x1 = $x1";
} else {
    // Imaginary solutions
    $realPart = -$b / (2 * $a);
    $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
    echo "The solutions are complex and are: ";
    echo "x1 = $realPart + {$imaginaryPart}i and x2 = $realPart - {$imaginaryPart}i";
}


?>



