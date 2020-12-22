<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo time()."<br>";
    echo date("Y-m-d",time())."<br>";
    $newdate =strtotime("1 day",time());
    echo date("Y-m-d",$newdate)."<br>";
    $newdate =strtotime("1 month",time());
    echo date("Y-m-d",$newdate)."<br>";
    $newdate =strtotime("1 year",time());
    echo date("Y-m-d",$newdate)."<br>";
    echo "time is ". date("h:i:s")."<br>";
    echo "----------------------------"."<br>";
    echo "Today is " . date("Y/m/d") . "<br>";
    date_default_timezone_set("Asia/Kolkata"). "<br>";
    echo "The time is " . date("h:i:sa")."<br>";
    echo "----------------------------"."<br>";
    
    ?>
</body>
</html>