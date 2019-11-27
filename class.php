<?php
class Person //this is a class
{ //setting properties inside of a class
    public $firstName = "Samuel Langhome"; //this is the properties (a public variable for a class)
    public $lastName = "Clements"; //this is the properties (a public variable for a class)
    public $yearBorn = 1899; //this is the properties (a public variable for a class)
}

$myObject = new Person(); //this is the object
echo $myObject->firstName."\n"; //object operator for accessing a class properties (used echo to print)

$myObject->firstName = "S. L."; //replacing the value of the firstName
echo $myObject->firstName; //print the replace value of a firstName
