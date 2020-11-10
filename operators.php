<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}
</style>
<title>PHP Operators</title>
</head>
<body>

<h1>PHP Operators</h1>

<p>Operators are used to perform certain PHP functions and
these operators are divided into the following groups:</p>

<ul><li>Arithmetic operators</li>
<li>Comparison operators</li>
<li>Increment/Decrement operators</li>
<li>Logical operators</li>
<li>String operators</li>
<li>Array operators</li>
<li>Conditional assignment operators</li></ul>

<h2>Arithmetic operators</h2>

<table style="width:100%">
  <tr>
    <th>Operators</th>
    <th>Description</th>
    <th>Example</th>
    <th>Result</th>
  </tr>
  <tr>
    <td>+</td>
    <td>Addition</td>
    <td>$a+$b</td>
    <td>Sum of $a and $b</td>
  </tr>
  <tr>
    <td>-</td>
    <td>Substraction</td>
    <td>$a-$b</td>
    <td>Difference of $a and $b.</td>
  </tr>
  <tr>
    <td>*</td>
    <td>Multiplication</td>
    <td>$a*$b</td>
    <td>Product of $a and $b.</td>
  </tr>
  <tr>
    <td>/</td>
    <td>Division</td>
    <td>$a/$b</td>
    <td>Quotient of $a and $b.</td>
  </tr>
  <tr>
    <td>%</td>
    <td>Modulus</td>
    <td>$a % $b</td>
    <td>Remainder of $a divided by $b.</td>
  </tr>
  <tr>
    <td>**</td>
    <td>Exponentiation</td>
    <td>$a**$b</td>
    <td>raising $a to the by'th power.</td>
  </tr>
</table>


<h1>Examples of Arithmetic operators</h1>
<?php
$a = 5;
$b = 2;

echo($a + $b); // 0utputs: 7
echo "<br>";
echo($a - $b); // 0utputs: 3
echo "<br>";
echo($a * $b); // 0utputs: 10
echo "<br>";
echo($a / $b); // 0utputs: 2.5
echo "<br>";
echo($a % $b); // 0utputs: 1
echo "<br>";
echo($a ** $b); // 0utputs: 25

?>

</body>
</html>
