<h1>PHP Function</h1>
<?php

function students() {
  echo "I am the Conqueror!  <br>";
  echo "I am the son of God!  <br>";
}

students();



echo "<h3>More Example</h3>";
function studentName($name, $course) {
  echo "$name  :  $course <br>";
}

studentName("Conqueror", "Software Engineering");
studentName("Tony", "Web Developer");
studentName("Favour", "medicine");
studentName("Divine", "Medicine");
studentName("Dr. Ify", "Medicine");

echo "<br>";
echo "<h3>Another Example</h3>";
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(5.2, 5.5);
?>
