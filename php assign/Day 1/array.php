<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name= array("Kirtishil","Patil");
        if (in_array("Kirtishil",$name))
        {
            echo "Welcome $name[0]";  //
        }
        else{
         echo "Wrong User";
        }
    ?>
</body>
</html>