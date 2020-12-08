<h1>PHP Conditional Statements</h1>

<p>PHP conditional statements are statements used to perform certain actions based on certain conditions.</p>
<p> Different conditions may apply but the conditions will be evaluated and a correct choice will be made which could be true or false.</p>
<p>Now let us look at different conditions in which we can use conditional statements:</p>

<h3>IF Statement</h3>

<p>if(condition){<p>
    // Code to be executed if condition is true
<p>} else{</p>
    // Code to be executed if condition is false
<p>}</p>

<?php
$a = 10;
$b = 7;
if ($a > $b) {
    echo "a is bigger than b <br>";
}



$a = 10;
$b = 7;
if ($a != $b) {
    echo "a is not equal than b";
}   else {
    echo "a is smaller than b";
}

echo "<br>";

$a = 10;
$b = 10;
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}

?>
