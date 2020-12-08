
<h1>$_REQUEST - superGlobal</h1>

<p>The $_REQUEST variable is used to collect data or information from users or subscribers through a form.</p>

<h3>$_POST method</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
  Name: <input type="text" name="name">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // enter field
  $name = $_REQUEST['name'];
  if (empty($name)) {
    echo "Name cannot be empty";
  } else {
    echo $name;
  }
}
?>
<h3>$_GET method</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" >
  Name: <input type="text" name="name">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // enter field
  $name = $_REQUEST['name'];
  if (empty($name)) {
    echo "Name cannot be empty";
  } else {
    echo $name;
  }
}
?>
