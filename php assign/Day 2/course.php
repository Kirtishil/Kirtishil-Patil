<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: salmon;
            padding: 40px;
            margin: 40px;
        }
    </style>
</head>
<body>
    <h1 style="color: blue;">Select Course</h1>
    <?php 
     $course = $_GET['course'];//Notice: Undefined index: course in C:\xampp\htdocs\php\course.php on line 10
    //getting this same notice for every code
     if($course==''){
     ?>
    <form action="<?php $_PHP_SELF?>" method="get">
        <select name="course">
            <option value="select">--select--</option>
            <option value="c">C</option>
            <option value="cpp">C++</option>
            <option value="java">Java</option>
            <option value="html">HTML</option>
            <option value="php">PHP</option>
        </select>
        <input type="submit" value="click">
  </form>
  <?php } ?>
  <?php
  if($course!=''){
    switch ($course) {
        case 'c':
            include "c.php";
            break;
        
        case 'cpp':
            include "c++.php";
            break;
            
        case 'java':
            include "java.php";
            break;

        case 'html':
            include "html.php";
            break;

        case 'php':
            include "php.php";
            break;
         
    }
}
  
  ?>
</body>
</html>