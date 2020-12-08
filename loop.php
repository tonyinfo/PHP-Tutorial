<h1>PHP Loop</h1>
<p>The loop is used to execute the code in the block for the specified times or number.</p>
<p>The code is executed as long as the condition is true.</p>

<p>
    $x = 0; - Initialize and set counter<br>
    $x <= 5; - The counter number.<br>
    $x++ - Increase the loop counter <br>
</p>

<h3>For Loop</h3>
<?php
for ($a = 0; $a <= 5; $a++) {
  echo "I am the Conqueror: $a <br>";
}

echo "<br />";

for ($a = 0; $a <= 10; $a+=2) {
	echo "I am the Conqueror: $a <br>";
}



echo "<h3>While Loop</h3>";


$a = 1;

while($a <= 5) {
  echo "I have overcome the world: $a <br>";
  $a++;
}


echo "<h3>Do while Loop</h3>";

//The main difference is that the do while execute once before checking the condition.
$a = 1;

do {
  echo "I am the greatest: $a <br>";
  $a++;
} while ($a <= 5);


echo "<h3>Foreach Loop</h3>"

?>
<?php

$students = array("Conqueror", "Favour", "Divine", "Ify");

foreach ($students as $value) {
  echo "$value <br>";
}


 
?>
