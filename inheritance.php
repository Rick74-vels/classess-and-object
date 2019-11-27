<?php
class Person //this is a class
{ //setting 1.constant, 2.properties, 3.constructor 4.methods inside of a class
    const AVG_LIFE_SPAN = 79; //constant and setting a value for it (constant only have a name with all capital

    public $firstName; //this is the properties (a public variable for a class)
    public $lastName; //this is the properties (a public variable for a class)
    public $yearBorn; //this is the properties (a public variable for a class)

    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "") //passing into a constructor
    {
        echo "Person Constructor".PHP_EOL; //added

        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public function getFirstName() //this is a method because it is a function inside of a class, if it is outside of a class it is usually a function
    {
        return $this->firstName.PHP_EOL; //added
    }

    public function setFirstName($tempName) //this is a method because it is a function inside of a class, if it is outside of a class it is usually a function
    {
        $this->firstName = $tempName;
    }

    public function getFullName() //added
    {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person //way to inherit another class
{
    public $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getFullName() //added
    {
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
echo $newAuthor->getFullName();