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
        
        <form action="arm.php" method="get">
        num<input type="number" name="num1">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
      
     function arm($num1) {
        $total=0;  
        $x=$num1;  
        while($x!=0)  
        {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
        }  
        if($num1==$total)  
        {  
        echo "it is an Armstrong number";  
        }  
        else  
        {  
        echo "it is not an Armstrong number";  
        }         
}  
    arm($num1);    
    ?>
</body>
</html>