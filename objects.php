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


<h1>Objects</h1>

<p>An Object is an instance of a class as defined in a class. When a Class is created which is a real world item, image or object and must have properties which are the objects. In the example below, we have a Class of Persons which has object which is the name.</p>  <p>When the Object is created they inherit the properties of the Class.  The Class and Object are the main properties of the Object Oriented Programming which we ill look at more in the later passage. The object is an instance of the class.</p>  <p>In a normal situation, a person must have name, age, nationality and other properties which differentiates him from other persons and those properties are referred to as the objects.</p>


<?php

class Person
{
  public $name;

  public function setProperty($name)
  {
      $this->name = $name;
  }

  public function getProperty()
  {
      return $this->name . "<br />";
  }
}

// Create two objects
$obj = new Person;
$obj1 = new Person;

// Get the value of $prop1 from both objects
echo $obj->getProperty();
echo $obj1->getProperty();

// Set new values for both objects
$obj->setProperty("I'm the Conqueror!");
$obj1->setProperty("I'm the Overcomer!");

// Output both objects' $prop1 value
echo $obj->getProperty();
echo $obj1->getProperty();


?>

<p>This OOP (Object Oriented Programming) is an advanced programming technique and will be dealt later.  The principle will be practised when dealing with functions.</p>


</body>
</html>
