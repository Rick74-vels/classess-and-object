<?php
class Person //this is a class
{ //setting 1.constant, 2.properties, 3.constructor 4.methods inside of a class
    const AVG_LIFE_SPAN = 79; //constant and setting a value for it (constant only have a name with all capital

    protected $firstName; //this is the properties (a public change to protected variable for a class)
    protected $lastName; //this is the properties (a public to protected variable for a class)
    protected $yearBorn; //this is the properties (a public to protected variable for a class)

    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "") //passing into a constructor
    {
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

    protected function getFullName() //added, now protected from public
    {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person //way to inherit another class
{
    protected $penName = "Mark Twain"; //now protected from public

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName() //added
    {
        return $this->firstName." ".$this->lastName." a.ka. ".$this->penName.PHP_EOL;
    }
}

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
// echo $newAuthor->getFullName(); //can't be access because it is protected
// echo $newAuthor->penName; //can't be access because it is protected
echo $newAuthor->getCompleteName(); //this can be access because it is not protected
