


<h1>Handling PHP Forms</h1>

<p>Forms are defined by using the "form" tags.  The form is a means of getting input from users.
They are used for registing members subscriptions, student forms, logins, logouts and so on.</p>
<p>They are very critical when information or data are to be kept in the database in the server.  it uses the HTML tags which contains tags, input fields such as text box, checkbox, radio buttons, submit button, checklist,  inlines and are used in all the emails, logins, logouts,  and submission boxes for data collection in the websites.</p>
<p>There are principally two methods for submitting forms in the web.  The Post method and the get method and the difference being they way the message is define.</p>
<p>Depending on the type of information/data that is being collected, the post method is often preferred because it is of course secured and can handle large quantity of data while the get method is not secured and with limited capacity of about 255 characters.</p>
<html>
<body>
<h3>Example</h3>
<h4>The $_GET Method</h>
<br></br>
 
  <form action="handlingForms.php" method="get">
    First name:<input type="text" name="firstname"> <br>
    Last name:<input type="text" name="lastname"><br>
    Email:<input type="text" name="email">

          <input type="submit" value="Submit">

      </form>

<?php
 echo $_GET["firstname"];
 echo "<br>";
 echo $_GET["lastname"];
  echo "<br>";
 echo $_GET["email"];
?>


  <form action="handlingForms.php" method="get">
    Name:<input type="text" name="firstname"> <br>
    Address:<input type="text" name="lastname"><br>
    Email:<input type="text" name="email"><br>

    Gender:
    Male<input type="radio" name="gender" value="male">
    Female<input type="radio" name="gender" value="female">
    Other<input type="radio" name="gender" value="other">
    <br><br>
          <input type="submit" value="Submit">
      <br></br>
          <?php
           echo $_GET["firstname"];
           echo "<br>";
           echo $_GET["lastname"];
            echo "<br>";
           echo $_GET["email"];
           echo "<br>";
          echo $_GET["gender"];
          echo "<br>";
          ?>







</body>
</html>
