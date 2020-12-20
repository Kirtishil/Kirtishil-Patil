<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $select=$_GET["select"];
    if($select==''){
    ?>
       
    <form action="climate.php" method="get">
    <select name="select">
	<option>select</option>
	<option>Sunny</option>
    <option>Windy</option>
	<option>Cold</option>
	<option>Rainy</option>
    </select>
    <input type="submit" value="submit">   
    </form>

    <?php } ?>

    <?php
      switch($select){
        
        case 'Sunny';
            echo"This is Sunny";
            break; 
        case 'Windy';
            echo"This is Windy";
            break;
        case 'Cold';
            echo"This is Cold";
            break; 
        case 'Rainy';
            echo"This is Rainy";
            break;          
      } 
    ?>    
</body>
</html>