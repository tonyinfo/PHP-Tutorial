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



<h1>Multidimensional Arrays</h1>

<p>This is where arrays are embedded inside the manin array.  We are going to do some examples here.</p>

<?php


echo $college;

$college = array (
  "Conqueror" => array("department" => "Computer Sciences",
                        "Course" => "Software Engineering",
                        "grade" => "First Class"),

  "Favour" => array("department" => "Medical Sciences",
                         "Course" => "Medicine",
                         "grade" => "Final year"),

   "Divine" => array("department" => "Medical Sciences",
                          "Course" => "Medicine",
                          "grade" => "Final year"),
);

/* Accessing multi-dimensional array values */
        echo "<h3>Record of Conqueror</h3>";
        echo "Department : " ;
        echo $college['Conqueror']['department'] . "<br />";

         echo "Course : " ;
         echo $college['Conqueror']['Course'] . "<br />";

         echo "Grade : " ;
         echo $college['Conqueror']['grade'] . "<br />";

  echo "<p><h3>Record of Performance</h3></p>";

         $college = array (
           "Conqueror" => array("department" => "Computer Sciences",
                                 "Course" => "Software Engineering",
                                 "grade" => "First Class"),

           "Favour" => array("department" => "Medical Sciences",
                                  "Course" => "Medicine",
                                  "grade" => "Final year"),

            "Divine" => array("department" => "Medical Sciences",
                                   "Course" => "Medicine",
                                   "grade" => "Final year"),
         );

         // Printing all the keys and values one by one
$keys = array_keys($college);
for($i = 0; $i < count($college); $i++) {
    echo $keys[$i] . ":<br>";
    foreach($college[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}

?>


</body>
</html>
