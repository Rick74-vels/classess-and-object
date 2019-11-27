<?php
class Person //this is a class
{ //setting properties and constant inside of a class
    const AVG_LIFE_SPAN = 79; //constant and setting a value for it (constant only have a name with all capital

    public $firstName = "Samuel Langhome"; //this is the properties (a public variable for a class)
    public $lastName = "Clements"; //this is the properties (a public variable for a class)
    public $yearBorn = 1899; //this is the properties (a public variable for a class)
}

$myObject = new Person(); //this is the object

echo $myObject::AVG_LIFE_SPAN; //printing the value of a constant variable
echo "\n";
echo Person::AVG_LIFE_SPAN; //printing the value of constant using the class name or variable