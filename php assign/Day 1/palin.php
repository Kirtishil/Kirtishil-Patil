<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str=$_GET["str"];
    if($str==''){
    ?>
        <form action="palin.php" method="get">
        <input type="text" name="str" placeholder="Enter name">
        <input type="submit" value="submit">
        </form>
    <?php } ?>
    <?php  
        $lenn=strlen($str);
        for($i=0; $i<=$lenn;$i++){
            if($str[$i]==$str[$lenn-1-$i]){
                echo"$str is Palindrome ";
                break;
            }
            else{
                echo"$str is Not Palindrome";
                break;
            }
        }
    ?>    
</body>
</html>