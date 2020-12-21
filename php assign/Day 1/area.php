<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 50px;
            padding: 20px;
            color: blue;
            font-size: 38px;
            background-color: beige;
        }
    </style>
</head>
<body>
    <?php 
    // here im getting error as undefined index
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    ?>

    <form action="<?php $_PHP_SELF?>" method="get">
    <input type="text" name="num1" placeholder="Enter num1">
    <input type="text" name="num2" placeholder="Enter num2">
    <select name="menu">
    <option value="select">Select</option>
    <option value="Triangle">Triangle</option>
    <option value="Rectangle">Rectangle</option>
    <option value="Circle">Circle</option>
    <input type="submit" name="submit" value="shape">
    </select>
    </form>
    
    <?php 
    if(isset($_GET['submit'])){
    $selected_val = $_GET['menu'];  
    if($selected_val=='Triangle')
    {
        echo "Area of triangle is:= ".$num1*$num2;
    }  
    elseif($selected_val=='Rectangle')
    {
        echo "Area of rectangle is:= ".$num1/$num2;
    }
    elseif($selected_val=='Circle')
    {
        echo "Area of circle is:= ".$num1+$num2;
    }
    else
    {
        echo "<br>Enter values n Select Option";
    }
    }    
    ?> 
</body>
</html>