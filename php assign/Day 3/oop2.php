<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set get</title>
    <style>
    body{
        padding: 20px;
        margin: 10px;
        border: 4px solid blue;
        color: darkred;
        background-color: lightgreen;
        text-align: center;
        font-weight: 900;
    }
    </style>

</head>
<body>
    <?php 
    class Info{
        private $firstName;
        private $lastName;
        private $cName;

        public function setFName($firstName){
            $this->firstName=$firstName;
        }
        public function getFName(){
            return $this->firstName;
        }

        public function setLName($lastName){
            $this->lastName=$lastName;
        }
        public function getLName(){
            return $this->lastName;
        }

        public function setCName($cName){
            $this->cName=$cName;
        }
        public function getCName(){
            return $this->cName;
        }
    }

    $obj = new Info();
    $obj->setFName('Kirtishil');
    $obj->setLName('Patil');
    $obj->setCName('DIPL');

    echo "First Name: ",$obj->getFName()."<br>";
    echo "Last Name: ",$obj->getLName()."<br>";
    echo "Company Name: ",$obj->getCName()."<br>";

    ?>
</body>
</html>