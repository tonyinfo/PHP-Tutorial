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

<h1>PHP Assignment Operator </h1>

<p>The assignment operator is "=". The left operand gets set to the value of the assignment expression on the right.</p>



<h2>Assignment Operator</h2>

<table style="width:100%">
  <tr>
    <th>Operators</th>
    <th>Description</th>
    <th>Example</th>
    <th>Same As</th>
  </tr>
  <tr>
    <td>=</td>
    <td>Assign </td>
    <td>$a = $b</td>
    <td>$a = $b</td>
  </tr>
  <tr>
    <td>+=</td>
    <td>Add and assign</td>
    <td>$a+=$b</td>
    <td>$a = $a + $b.</td>
  </tr>
  <tr>
    <td>-=</td>
    <td>Substract and assign</td>
    <td>$a-=$b</td>
    <td>$a = $a - $b</td>
  </tr>
  <tr>
    <td>*=</td>
    <td>Multiply and assign</td>
    <td>$a*=$b</td>
    <td>$a = $a * $b</td>
  </tr>
  <tr>
    <td>/=</td>
    <td>Divide and assign quotient</td>
    <td>$a /= $b</td>
    <td>$a = $a / $b</td>
  </tr>
  <tr>
    <td>%=</td>
    <td>Divide and assign modulus</td>
    <td>$a %=$b</td>
    <td>$a = $a % $b</td>
  </tr>
</table>


<h1>Assignment Operator</h1>
<h3>Example</h3>
<?php
$a = 5;
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

?>


</body>
</html>
