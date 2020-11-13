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

<h1>Variables</h1>


<p>Variables are memory allocation apportioned to the system to store data at the runtime.  It is donated by the $ sign.   A variable can be anything and can start from a-z, A-Z, _.
Examples:</p>
$name, $person, $john, $a - $z, $_var, $var and cannot start with $1 - $10 and $-var.
<p>We do not have to tell PHP which data type the variable is most of the time, the PHP will recognise and automatically associate the variable to the appropriate data type because PHP is known to be a loosely written language or script.</p>
	<h3>Scope of a Variable</h3>
<p>Scope is used to define accessibility and visibility</p>
global<br>
local<br>
static<br>
function_parameters<br>

<h3>Global Variables</h3>
<p>The global variables are variables which can be accessed from any function and are not restricted on any particular block in the program.  It is defined by the keyword ‘global’.  It is not constrained in a boundary but visible to all blocks and accessibility is by all.</p>

<h5>Examples</h5>

<?php
$a = 10; //global scope

echo "Variable \"a\" is global with print out of: $a"; //Output 10.
?>

<h5>Further global variables</h5>

<?php
$a = 5;
$b = 3;
function add(){
	global $a, $b;
	$c = $a + $b;
echo $c; //Output 8.
}
add();
?>

<h3>Local variables</h3>
<p>A local variable is one which is set within a local function and can only be accessed within that locality and in the block for which it is defined.  It is the block or boundary for which it is visible.</p>

<?php
function test(){
$a = 5; //local scope
$b = 7;
$a = $a+$b;
echo "Output for the local scope is: $a";
}

test();
?>


<p>The local variable is limited and can be accessed only in the block in which it is declared which is within the local boundary.</p>

<h3>Static variable</h3>
<p>The static variable is a local variable which is only visible in its block 	where it is defined.  It does not loose its value when the program 	execution is completed.</p>

<?php
function testData(){
static $i = 1 +2 ; //local scope
echo $i;
}

testData();
?>
<h3>Function_parameters </h3>
<p>They are local arguments and variables declared within a function and are used in the local block.</p>



</body>
</html>
