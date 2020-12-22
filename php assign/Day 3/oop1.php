<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP basic</title>
    <style>
    body{
        padding: 20px;
        margin: 10px;
        border: 4px solid red;
        color: blue;
        background-color: cyan;
        text-align: center;
        font-weight: 900;
    }
    </style>
</head>
<body>
    <?php 
    class Employee{
        public $name;
        public $id;
        public static $branch = "CSE";
        const companyName = "DIPL";

        function __construct($name,$id){
            $this->name=$name;
            $this->id=$id;
        }

        function __destruct()
        {
            echo "called before closing the script";
        }

        function printDetails(){
             echo "Name: ",$this->name."<br>";
             echo "ID: ",$this->id."<br>";
             echo "Branch: ",Employee::$branch,"<br>";
             echo "Company Name: ",Employee::companyName,"<br>";
        }
    }
    $emp = new Employee("Kirtishil Patil",101);
    $emp->printDetails();
     
    ?>
</body>
</html>