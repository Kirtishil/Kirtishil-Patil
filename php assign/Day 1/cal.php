<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $op=$_GET["op"];
    if ($num=='' && $num2=='' && $num3=='' ){
    ?>
    <form action="cal.php" method="get"> 
    Number1<input type="number" name="num1"><br>
    Number2<input type="number" name="num2"><br>
    operation<input type="text" name="op"><br>
    <input type="submit" value="submit">
    </form>
    <?php } ?>
    <?php
        
            // if($op=='+'){
            //     $result=$num1+$num2;
            //      echo"Addition is : ",$result;
            //  }
            // if($op=='-'){  
            //     $result=$num1-$num2;
            //     echo "Subtraction is : ",$result;
            // }
            // if($op=='*'){
            //     $result=$num1*$num2;
            //     echo"multiplication is : ",$result;
            // }
            // if($op=='/'){
            //     $result=$num1/$num2;
            //     echo"Division is : ",$result;
            // }
             switch($op)
             {
                case '+':
                    echo "Addition is : ",$num1+$num2;
                    break;
                case '-':
                    echo "Subtration is : ",$num1-$num2;
                    break;
                case '*':
                    echo "Multiplication is : ",$num1*$num2;
                    break;
                case '/':
                    echo "Division is : ",$num1/$num2;
                    break;    
             }
    ?>
</body>
</html>