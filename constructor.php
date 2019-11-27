<?php
class Person //this is a class
{ //setting 1.constant, 2.properties, 3.constructor 4.methods inside of a class
    const AVG_LIFE_SPAN = 79; //constant and setting a value for it (constant only have a name with all capital

    public $firstName; //this is the properties (a public variable for a class)
    public $lastName; //this is the properties (a public variable for a class)
    public $yearBorn; //this is the properties (a public variable for a class)

    function __construct() //this the constructor inside of a class
    {
        //echo "I'm in the constructor";
        $this->firstName = "Samuel Langhome";
        $this->lastName = "Clemens";
        $this->yearBorn = 1899;
    }

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

echo $myObject->getFirstName();