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


<h1>Integer</h1>



An integer is a whole number which could be positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notations.
It must not have decimal places

How to define an integer: int();

<?php
$a = 1;
$b = 2;
$c = $a+$b;
echo $c; // The output should be 3.
?>

Another example

<?php
$a = 4;
$b = 2;
$c = $a/$b;
echo $c; // The output is 2.
?>

<?php
echo PHP_INT_MAX; // The maximum amount of integer is 9223372036854775807.
?>

We will learn and practise more of this when we learn ‘operators’ and subsequent topics.

</body>
</html>
