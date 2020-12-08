

<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<h1>Form Validation</h1>
  <p>The Form Validation is necessary to combat security breaches.  It ensures that data transmitted are in line with the desired objectives.</p>
<p>Ensures that hackers and spammers do not breach the security of the internet.</p>  Of course, hundred per cent guarantee is not assured, but to prevent any damage to the database.  Below is a simple example od data validation:</p>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
echo "<h2>Output:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<h3>Form Validation</h3>
<p><span class="error">* required field</span></p>
<form method="post" action="formValidation.php">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Message: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
