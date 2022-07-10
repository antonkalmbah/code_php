<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_page</title>
</head>
<body>
    <h1>Практика</h1>

    <?php 
        echo "Hello world!";
        echo "<br>";

        // приветствие
        $name = "Антон";
        $age = 27;
        echo "Привет! Меня зовут $name, мне $age лет.";
        echo "<br>"; 

        // массив с выводом контректного значения из него
        $list = array('первый', 'второй', 'третий');
        echo $list[2];
        echo "<br>"; 

        // массивы
        $list_2 = array(array('1','2','3'),
                        array('4','5','6'),
                        array('7','8','9'));

        echo $list_2[0][1]; // [вибираем 1 массив][вторая цифра (2)]
        echo $list_2[1][0]; // [выбираем 2 массив][первая цифра(7)]
        echo "<br>";

        // Операторы сложения
        $num = 1;
        echo $num += 1; echo "<br>";
        echo $num += 1; echo "<br>";
        echo $num += 1; echo "<br>";
        echo $num += 1;
        echo "<br>";

        // Увеличение с помощью ++
        $x = 90;
        if
            (++$x >= 10) echo $x;
        else 
            echo "Не подходит";
        echo "<br>";

        // объединения строк с помощью .
        echo "У вас только ".$x." значения";
        echo "<br>";
        
        // типы строк
        $str = 101;
        $info = 'Самая обычная строчка текста без каких-либо подставлений значений в переменную $str';
        echo $info;
        echo "<br>";
        $info_2 = "Строчка, где подставляется занчение в переменную $str";
        echo $info_2;
        echo "<br>";

        // изменение значения символов
        $symbol_change = "Дата\tИмя\tПлатеж "."<br>"."Date\nName\nPayment "."<br>"."Дата\rИмя\rПлатеж"; 
        // табуляция, переход строки, каретка. Работают только при двойных кавычках
        echo $symbol_change;
        echo "<br>";

        // многострочные команды
        $author = 'Кальмбах Антон Генадьевич';

        echo<<<_END
            <pre>Сюда я вношу многостроный текст, который пишу не внутри '' or "",
            а внутри (_END).</pre>

            - $author.
        _END;
        echo "<br>";

        // типы переменных
        $multy = 12345;
        echo substr($multy, 0, 1); // выводим 1 знак из переменной
        echo "<br>";

        // константы
        define("FOLDER_CODE", "C:\Users\anton\Documents\Code"); // определяется с помощью define, в верхнем регистре желательно
        $code = FOLDER_CODE; // указывается без после = без $
        echo "<br>";

        // предопределенные константы
        // указал в записях в OneNote
        // Пример
        echo "Номер строки в IDE - ".__LINE__.", в директории - ". __FILE__; // line - номер строки, file - путь к нему
        echo "<br>";

        // работаем с print и с помощью ? определяем значение переменной
        $meaning_t_or_f = False;
        $meaning_t_or_f ? print "True" : print "False"; 
        echo "<br>";

        // функции
        function longdate($timestamp)
        {
            return date("l F jS Y", $timestamp);
        }
        echo longdate(time());

    ?>
</body>
</html>