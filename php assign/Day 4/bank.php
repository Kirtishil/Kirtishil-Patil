<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        border: 4px solid red;
        margin: 20px;
        padding: 20px;
        background-color: lime; 
        font-weight: 900;         
    }
    </style>
</head>
<body>

    <?php 
    interface Demo{
        public function msg();
    }
    class Main implements Demo{
        public function msg(){
            echo "Just for fun";
        }
    }
    $a = new Main();
    $a->msg();
    
    class Account{
        public $balance=10000;
        function __construct()
        {
            echo "<br>----------------Welcome to DIPL Bank------------------<br>";
        }
        function getBal(){
            echo "Balance is: ",$this->balance,"<br>";
        }
        function widraw($wid){
            echo "U want to widraw: ",$wid,"<br>";
        }
        function deposit($dip){
            echo "U want to deposit: ",$dip,"<br>";
        }     
    }
     class Saving extends Account{
        function widraw($wid2){
            echo "Remaining Balance in Saving is: ",($this->balance-$wid2),"<br>";
        }
        function deposit($dip2){
            echo "Latest Balance in Saving is: ",($this->balance+$dip2),"<br>";
        }
    }
     class Current extends Account{
        function widraw($wid){
            echo "<br>Remaining Balance in Current is: ",($this->balance-$wid),"<br>";
        }
        function deposit($dip){
            echo "Latest Balance in Current is: ",($this->balance+$dip),"<br>";
        }
    }

    $obj = new Current();
    $obj->getBal();
    #$obj->widraw(100);
    #$obj->deposit(200);
    
    $obj1 = new Saving();
    $obj1->widraw(200);
    $obj1->deposit(400);

    //overriding
    #$obj3 = new Current();
    $obj->widraw(400);
    $obj->deposit(600);

    ?>

</body>
</html>