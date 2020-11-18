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


<h1>Associative Arrays</h1>

 Associative Arrays that link or associate a key to the object.  Eg. A student must have a course or department. In other words, there is value to a key.

<p><h3>Examples</h3></p>
<?php

$student_courses = array("Tony"=>"Software Engineering", "Conqueror"=>"Web Development", "Favour"=>"Medicine", "Divine"=>"Medicine", "Felicia"=>"Medicine");


//print_r(array_values($students
print_r(array_values($student_courses));
echo "<br>";

print_r($student_courses);
echo "<br>";
echo "<br>";
/*$student_courses = array("Tony"=>"Software Engineering", "Conqueror"=>"Web Development", "Favour"=>"Medicine", "Divine"=>"Medicine", "Felicia"=>"Medicine" . "\n");

// Get values from students array
foreach($student_courses as $key => $value){
    echo $key . " is studying " . $value . "<br>";
  }*/
  echo "<br>";

  $student_courses["Tony"] = "Software Engineering";
  $student_courses["Conqueror"] = "Web Development";
  $student_courses["Favour"] = "Medicine";
  $student_courses["Divine"] = "Medicine";
  $student_courses["Felicia"] ="Medicine";

  /* Accessing the elements directly */
 echo "Print out of students courses: <br>";
 echo "<br>";
 echo  "Tony is in the Department of " . $student_courses["Tony"], "<br>";
 echo "Conqueror is in the Department of " . $student_courses["Conqueror"], "<br>";
 echo "Favour is in the Department of " . $student_courses["Favour"], "<br>";
 echo "Divine is in the Department of " . $student_courses["Divine"], "<br>";
 echo "Felicia is in the Department of " . $student_courses["Felicia"], "<br>";

 echo "<br>";
 echo "<br>";
 $student_courses = array("Tony"=>"Software Engineering", "Conqueror"=>"Web Development", "Favour"=>"Medicine", "Divine"=>"Medicine", "Felicia"=>"Medicine" . "\n");

 // Get values from students array
 foreach($student_courses as $key => $value){
     echo $key . " is studying " . $value . "<br>";
   }
   echo "<br>";


?>


</body>
</html>
