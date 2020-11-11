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

<h1>Comparison Operators </h1>

<p>Comparison operators are used to compare two values in a Boolean fashion..</p>



<h2>Assignment Operators</h2>

<table style="width:100%">
  <tr>
    <th>Operators</th>
    <th>Description</th>
    <th>Example</th>
    <th>Result</th>
  </tr>
  <tr>
    <td>==</td>
    <td>Equal</td>
    <td> $a == $b </td>
    <td>True if $a is equal to $b</td>
  </tr>
  <tr>
    <td>===</td>
    <td>Identical</td>
    <td>$a === $b</td>
    <td>True if $a is equal to $b, and they are of the same type.</td>
  </tr>
  <tr>
    <td>!=</td>
    <td>Not equal</td>
    <td>$a != $b</td>
    <td>True if $a is not equal to $b</td>
  </tr>
  <tr>
    <td> <> </td>
    <td>Less than and greater than</td>
    <td>$a <> $b</td>
    <td>True if $a is not equal to $b</td>
  </tr>
  <tr>
    <td>!==</td>
    <td>Not identical</td>
    <td>$a !== $b</td>
    <td>True if $a is not equal to $b, or they are not of the same type</td>
  </tr>
  <tr>
    <td> < </td>
    <td>Less than</td>
    <td>$a < $b</td>
    <td>True if $a is less than $b</td>
  </tr>
  <tr>
    <td> > </td>
    <td>Greater than</td>
    <td>$a > $b</td>
    <td>True if $a is greater than $b</td>
  </tr>
  <tr>
    <td> >= </td>
    <td>Greater than or equal to</td>
    <td>$a >= $b</td>
    <td>True if $a is greater than or equal to $b</td>
  </tr>
  <tr>
    <td> <= </td>
    <td>Less than or equal to</td>
    <td>$a <= $b</td>
    <td>True if $a is less than or equal to $b</td>
  </tr>
</table>


<h1>Assignment Operators</h1>
<h3>Example</h3>
<?php
/*$a = 5;
#$b = 2;

echo $a; // 0utputs: 5
echo "<br>";
echo $a += 2; // 0utputs: 7
echo "<br>";
echo $a -= 2; // 0utputs: 5
echo "<br>";
echo $a *= 2; // 0utputs: 10
echo "<br>";
echo $a /= 2; // 0utputs: 3
echo "<br>";
echo $a %= 2; // 0utputs: 1
*/
?>

<?php

$a = 4;
$b = 2;

var_dump($a == $b); // Outputs: boolean false
var_dump($a === $b); // Outputs: boolean false
var_dump($a != $b); // Outputs: boolean true
var_dump($a !== $b); // Outputs: boolean true
var_dump($a < $b); // Outputs: boolean false
var_dump($a > $b); // Outputs: boolean true
var_dump($a <= $b); // Outputs: boolean false
var_dump($a >= $b); // Outputs: boolean true

?>


</body>
</html>
