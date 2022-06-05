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

    // выводим цикл цифр от заданного и до заданного пользователем
    fscanf(STDIN, "%d %d", $a, $b);
    $a = 4;
    $b = 55;
    if ($a > $b) {
        echo "Сумма не существует";
    } else {
        while ($a < $b){
            echo $a." ";
            $a++;
        }
    }

?>