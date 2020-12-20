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
    if($num1==''&&$num2==''){
    ?>
        <form action="swap.php" method="get">
        <input type="text" name="num1" placeholder="enter number 1">
        <input type="text" name="num2" placeholder="enter number 2">
        <input type="submit" value="swap">
        </form>

    <?php } ?>

    <?php
        echo "B4 Swap :<br> number 1: $num1  <br> number 2: $num2 <br>";
        $num1=$num1+$num2;
        $num2=$num1-$num2;
        $num1=$num1-$num2;
        echo "After Swap :<br> number 1: $num1  <br> number 2: $num2";
    ?>

    


    
</body>
</html>