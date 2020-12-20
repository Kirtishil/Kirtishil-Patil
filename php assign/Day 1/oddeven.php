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
        <form action="oddeven.php" method="get">
        <input type="text" name="num1" placeholder="Enter number">
        <input type="submit" value="check">
        </form>
    <?php } ?>

    <?php
        for($i=1; $i<=$num1;$i++){
            if($i%2 ==0){
                echo "even : $i <br>";
            }
            else{
                echo"odd : $i <br>";
            }
        }
    ?>
</body>
</html>