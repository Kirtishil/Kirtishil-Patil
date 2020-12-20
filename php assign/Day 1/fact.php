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
    if($num1==''){
    ?>
        <form action="fact.php" method="get">
        <input type="number" name="num1">
        <input type="submit" value="check">
        </form>

    <?php } ?>

    <?php
        $fact=1;
        for($i=1; $i<=$num1;$i++){
            $fact=$fact*$i;
        }
        echo "Factorial is: $fact";
    ?>
</body>
</html>