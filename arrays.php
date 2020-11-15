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



<h1>Arrays</h1>

<p>Array is a special variable which holds data of related fields and they can be accessed throug a common field.</p>
<p>They are useful to organising date where you have large amout of data or in a large database management system</p>
<p>For a $student, he should have name and other properties to distinguish him from other students.</p>

<p>We are going to use array() function to create arrays.</p>

<p>Now, let us look at indexed arrays:</p>

<p><h3>Examples</h3></p>
<?php
echo "<h3>Index Arrays</h3>";
echo "<br>";


$nums = array( 1, 2, 3, 4, 5);

         foreach( $nums as $value ) {
            echo "Value is $value <br />";
         }
echo "<br>";


$student[0] = "Tony";
$student[1] = "Conqueror";
$student[2] = "Favour";
$student[3] = "Divine";
$student[4] = "Felicia";
foreach( $student as $value ) {
   echo "Value is $value <br />";
}
echo "<br>";



$student = array(0 => Tony,
		     1 => Conqueror,
		     2 => Favour,
		     3 => Divine,
		     4 => Felicia);
		echo $student[3];  // Output Divine

    echo "<br>";
  echo "<br>";

echo "<br>";


   $student = array("Tony",  "Conqueror", "Favour", "Divine", "Felicia");
   var_dump($student); //Output Conqueror

echo "<br>";

$students = array(“Tony”,  “Conqueror”, “Favour”, “Divine”, “Felicia”);
print_r($students); //Output Tony,  Conqueror, Favour,  Divine, Felicia

echo "<br>";
//Loopin index array

echo "<br>";
echo"<p><h3>Looping Array</h3></p>";
$students = array(Tony,  Conqueror, Favour, Divine, Felicia);
$arrlength = count($students);

for($i = 0; $i <= $arrlength; $i++) {
  echo $students[$i];
  echo "<br>";
}

?>




</body>
</html>
