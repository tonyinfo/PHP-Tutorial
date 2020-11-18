<h1>Array Functions</h1>
<p>These are some of the PHP inbuilt array functions to make your coding a fun.</p>

 sort() - sort arrays in ascending order.<br>
 rsort() - sort arrays in descending order<br>
 asort()- sort associative arrays in ascending order of the value<br>
 ksor()t - sort associative arrays in ascending order of the key<br>
 arsort() - sort associative arrays in descending order of the value<br>
 krsort() - sort associative arrays in descending order of the key<br>



<?php
 echo "<h3> Sorting Numberic arrays</h3>";
 $numbers = array(1, 2, 3, 4, 5);
 echo "<h3>sort arrays in ascending order</h3>";
 sort($numbers);
 print_r($numbers);
 echo "<br>";
 echo "<h3>sort arrays in descending order</h3>";
 rsort($numbers);
 print_r($numbers);
 echo "<br>";

 echo "<h3>The Length of an Array</h3>";
echo "<p>We use the count() function to determine the length of arrays.</p>";


  $students = array(“Tony”,  “Conqueror”, “Favour”, “Divine”, “Felicia”);
   echo count($students); //Output 5.
   echo "<br>";
   echo "<br>";
   echo "<h3>sort arrays in ascending order</h3>";
   sort($students);
print_r($students);
echo "<br>";
echo "<h3>sort arrays in descending order</h3>";
rsort($students);
print_r($students);
echo "<br>";

echo "<h1>Associative arrays</h1>";

echo "<h3>Associative arrays - ascending order of the value </h3>";
$student_courses = array("Joel"=>"Software Engineering", "Francis"=>"Web Development", "Favour"=>"Medicine", "Divine"=>"Medicine", "Felicia"=>"Medicine");
   asort($student_courses);
   print_r($student_courses);
   echo "<br>";
   echo "<h3>Associative arrays - ascending order of the key </h3>";
   ksort($student_courses);
   print_r($student_courses);
   echo "<br>";
   echo "<h3>Associative arrays - descending order of the value </h3>";
   arsort($student_courses);
   print_r($student_courses);
   echo "<br>";
   echo "<h3>Associative arrays - descending order of the key </h3>";
   krsort($student_courses);
   print_r($student_courses);
    echo "<br>";

echo "<h3>sort arrays in ascending order</h3>";
 echo "<br>";
$numbers = array(1, 2, 3, 4, 5);
sort($numbers);

$arrlength = count($numbers);
for($i = 0; $i < $arrlength; $i++) {
  echo $numbers[$i];
  echo "<br>";
}
echo "<br>";
echo "<h3>sort arrays in descending order</h3>";
$numbers = array(1, 2, 3, 4, 5);
rsort($numbers);

$arrlength = count($numbers);
for($i = 0; $i < $arrlength; $i++) {
 echo $numbers[$i];
 echo "<br>";
}

echo "<h3>sort arrays in ascending order</h3>";
$students = array(Tony,  Conqueror, Favour, Divine, Felicia);
 sort($students);

 $arrlength = count($students);
 for($i = 0; $i < $arrlength; $i++) {
  echo $students[$i];
  echo "<br>";
 }

 echo "<h3>sort arrays in descending order</h3>";
 $students = array(Tony,  Conqueror, Favour, Divine, Felicia);
  rsort($students);

  $arrlength = count($students);
  for($i = 0; $i < $arrlength; $i++) {
   echo $students[$i];
   echo "<br>";
  }
 
?>
