<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    // Даны целые числа n и m. Вывести на экран все числа от 0 до 1000, 
    // которые содержат хотя бы одну n и не делятся на m
    
    $n = 8;
    $m = 15;
    for($i=0; $i<=1000; $i++) {
        if((strpos($i, $n) !== false and ($i%$m) == 0)) {
            echo $i." ";
        }
    }

?>