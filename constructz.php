<?php
class BaseClass {
   function __construct() {
       print "Конструктор класса BaseClass\n";
   }
}

class SubClass extends BaseClass {
   function __construct() {
      // parent::__construct();
       print "Конструктор класса SubClass\n";
      // parent::__construct();

   }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
//$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();

var_dump($obj);
class MyDestructableClass {
   function __construct() {
       print "Конструктор\n";
       $this->name = "MyDestructableClass";
   }
   function getMes()
   {
     echo "one" . PHP_EOL;
   }
   function __destruct() {
       print "Уничтожается " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
var_dump($obj);
$obj->getMes();
?>
