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
    
    <form action="rev.php" method="get">
    <input type="text" name="str">
    <input type="submit" value="reverse">
    </form>
    <?php } ?>
    
    <?php
        function Reverse($str){
        $len=strlen($str);
        for($i=0,$j=$len-1; $i<$j; $i++,$j--){
           $temp=$str[$i];
           $str[$i]=$str[$j];
           $str[$j]=$temp;
        }
        return $str;        
    }
    $result=Reverse($str);
    echo"Reverse String : $result ";
    ?>    
</body>
</html>