<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
<?php
class A {
  public $name;
  static $msg = "Welcome..........";

  public function __construct($name) {
    $this->name = $name;
  }

  static function greet(){
      echo "Thank You!!!"."<br>";
  }

  public function show($para) {
    echo "Name is: {$this->name}" ."<br>";
    echo $para."<br>"; 
    echo self::$msg."<br>";
    self::greet();
  }
}

class B extends A {
  static $msg = "Welcome Again..............";
  public function show2() {
    echo " ~~~~~~~~~~~~~~~~~~~~~~~~ "."<br>"; 
    echo self::$msg."<br>";
    echo parent::$msg."<br>";
    parent::greet();
  }
}

$obj = new B("Kirtishil");
$obj->show("hi....");
$obj->show2();
?>
</body>
</html>