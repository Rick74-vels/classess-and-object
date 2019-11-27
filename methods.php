<?php
class Person //this is a class
{ //setting 1.constant, 2.properties, 3.methods inside of a class
    const AVG_LIFE_SPAN = 79; //constant and setting a value for it (constant only have a name with all capital

    public $firstName = "Samuel Langhome"; //this is the properties (a public variable for a class)
    public $lastName = "Clements"; //this is the properties (a public variable for a class)
    public $yearBorn = 1899; //this is the properties (a public variable for a class)

    public function getFirstName() //this is a method because it is a function inside of a class, if it is outside of a class it is usually a function
    {
        return $this->firstName;
    }

    public function setFirstName($tempName) //this is a method because it is a function inside of a class, if it is outside of a class it is usually a function
    {
        $this->firstName = $tempName;
    }
}

$myObject = new Person(); //this is the object

$myObject->setFirstName("Sam"); //accessing methods inside of a class
echo $myObject->firstName; //printing a result
echo "\n";
echo $myObject->getFirstName(); //replacing the firstname in other echo