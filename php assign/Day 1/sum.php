<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $num=$_GET["num"];
    if($num==''){?>
        <form action="sum.php" method="get">
        <input type="text" name="num">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        function sum($num){
        $sum=0;
        while($num>0){
             $a=$num%10;
             $sum+=$a;
             $num=$num/10;
        }
        echo "Sum of digit is: $sum";
        }
    sum($num);
    ?>    
</body>
</html>