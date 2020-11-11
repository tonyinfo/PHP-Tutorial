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

<h1>Incrementing and Decrementing Operators</h1>

<p>They are used to increment and decrement variable values.</p>



<h2>Incrementing/Decrementing Operators</h2>

<table style="width:100%">
  <tr>
    <th>Operators</th>
    <th>Description</th>
    <th>Effect</th>
  </tr>
  <tr>
    <td> ++$a </td>
    <td>Pre-increment</td>
    <td>Increments $a by one, then returns $a</td>
  </tr>
  <tr>
    <td> $a++ </td>
    <td>Post-increment</td>
    <td>Returns $a, then increments $a by one</td>
  </tr>
  <tr>
    <td>--$a</td>
    <td>Pre-decrement</td>
    <td>Decrements $a by one, then returns $a</td>
  </tr>
  <tr>
    <td> $a-- </td>
    <td>Post-decrement</td>
    <td>Returns $a, then decrements $a by one</td>
  </tr>


</table>


<h3>Incrementing and Decrementing Operators</h3>
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
$a = 10;
echo "<br>";
echo ++$a; // Outputs: 11
echo "<br>";
echo $a; // Outputs: 11
echo "<br>";
$a = 10;
echo "<br>";
echo $a++; // Outputs: 10
echo "<br>";
echo $a; // Outputs: 11
echo "<br>";
$a = 10;
echo "<br>";
echo --$a; // Outputs: 9
echo "<br>";
echo $a; // Outputs: 9
echo "<br>";
$a = 10;
echo "<br>";
echo $a--; // Outputs: 10
echo "<br>";
echo $a; // Outputs: 9

?>

</body>
</html>
