<h1>PHP Superglobals</h1>
<p>Here are some predefined variables in PHP which are "superglobals".</p>
<p>They are  accessible irrespective of scope and can be accessed from any function, class or file.</p>
<p>You do not have to use the keyword superGlobal to define any of them.</p>
<p>PHP superglobal variables are:</p>
    • $GLOBALS</br>
    • $_SERVER</br>
    • $_REQUEST</br>
    • $_POST</br>
    • $_GET</br>
    • $_FILES</br>
    • $_ENV</br>
    • $_COOKIE</br>
    • $_SESSION</br>
<p>They are variables stored in an indexed array which can be accessed from any part of the PHP program. They perform different functions as their names imply.</p>
We are going to do some excerises to see how they work.

<h3>Example: </h3>
<!DOCTYPE html>
<html>
<body>
<?php
$a = 5;
$b = 5;
function multiplication() {
  $GLOBALS['c'] = $GLOBALS['a'] * $GLOBALS['b'];
}
multiplication();
echo $c;
?>


<p><h3>PHP $_SERVER</h3></p>
<p>This is a $superglobal which hold information about the server such as the header, paths and script locations.</p>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>




</body>
</html>
