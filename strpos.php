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
    $mystring = 'abc';
    $findme   = 'a';
    $pos = strpos($mystring, $findme);

    // Заметьте, что используется ===.  Использование == не даст верного
    // результата, так как 'a' находится в нулевой позиции.
        if ($pos === false) {
            echo "Строка '$findme' не найдена в строке '$mystring'";
        } else {
            echo "Строка '$findme' найдена в строке '$mystring'";
            echo " в позиции $pos";
        }

?>
