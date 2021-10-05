<?php

class Car{
    public $color = "red";
    }

$beetle = new Car();
$mustang = new Car();
echo "<pre>";
$beetle->color="blue";
print_r( $beetle ); // DISPLAYS "CAR OBJECT ( )"\
echo "<br>";
print_r( $mustang ); // DISPLAYS "CAR OBJECT ( )"
$mustang->color="green";
echo "<br>";
print_r( $mustang ); // DISPLAYS "CAR OBJECT ( )"


class MyClass {
    public $greeting = "Hello, World!";
    public function hello() {
    return $this->greeting;
    }
   }
   $obj = new MyClass;
   echo $obj->hello(); // DISPLAYS "HELLO, WORLD!"

   class Person {
    private $_firstName;
    private $_lastName;
    private $_age;
    public function __construct( $firstName, $lastName, $age ) {
    $this->_firstName = $firstName;
    $this->_lastName = $lastName;
    $this->_age = $age;
    }
    public function showDetails() {
    echo "$this->_firstName $this->_lastName, age $this->_age\n";
    }
   }
   $p = new Person( "Harry", "Walters", 28 );
   $p->showDetails(); // Displays "Harry Walters, age 28"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>