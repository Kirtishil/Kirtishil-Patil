<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $year=$_GET["year"];
    if($num==''){
    ?>
        <form action="leap.php" method="get">
        <input type="number" name="year">
        <input type="submit" value="check">
        </form>
    <?php } ?>

    <?php
        if($year%4==0)
        echo "$year is Leap year";
        else
        echo "$year is Not Leap year";
    ?> 
</body>
</html>