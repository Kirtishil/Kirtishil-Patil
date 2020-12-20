<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $sentence=$_GET["sentence"];
    if($sentence==''){
    ?>
    
        <form action="vowel.php" method="get">
        <textarea name="sentence" placeholder="Enter sentence"></textarea>
        <input type="submit" value="check">
        </form>

    <?php } ?>

    <?php

        function vowels($sentence){
            $count=0;
        for($i=0; $i<=strlen($sentence);$i++){
            if($sentence[$i]=="a" ||$sentence[$i]=="e" ||$sentence[$i]=="i" ||$sentence[$i]=="o" ||$sentence[$i]=="u"){
                $count++;
            }
        }
        return $count;    
    }
    $total=vowels($sentence);
    echo("Vowels count is: $total");
    ?>

    


    
</body>
</html>