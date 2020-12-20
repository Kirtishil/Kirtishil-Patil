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
    $num3=$_GET["num3"];
    if ($num=='' && $num2=='' && $num3=='' ){
    ?>
    <form action="greatest.php" method="get">
    <input type="text" name="num1" placeholder="Enter num 1"><br>
    <input type="text" name="num2" placeholder="Enter num 2"><br>
    <input type="text" name="num3" placeholder="Enter num 3"><br><br>
    <input type="submit" value="check">
    </form>
    <?php }?>
    <?php  
    if($num1>$num2 && $num1>$num3)
    {
        echo "greatest is ",$num1;
    } 
    else if($num2>$num1 && $num2>$num3)
    {
        echo "greatest is ",$num2;
    }
    else
    {
        echo "greatest is ",$num3;
    }
    ?>
</body>
</html>