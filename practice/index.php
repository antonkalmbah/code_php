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
        $info_2 = "Строчка, где подставляется значение в переменную $str";
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
        function longdate($timestamp) // переменная внутри выступает как аргумент, который мы "выдумываем" и используем дальше в коде
        {
            return date("d:m:Y", $timestamp); // в кавычках мы указываем формат даты с символом между (у меня ":")
        }
        echo longdate(time());
        echo "<br>";

        // области видимости переменных
        $temp = "Дата: ";
        echo $temp.longdate(time());
        echo "<br>";    

        // статические переменные. нужны, чтобы значение перемнной сохранялось внутри конкректной функции
        function static_num() {
            static $count = 0;
            echo $count;
            $count++;
        }

        static_num(); // 0
        static_num(); // 1
        static_num(); // 2
        static_num(); // 3
        echo "<br>";   

        // Суперглобальные переменные и проблемы безопасности
        // $came_from = htmlentities($_SERVER['HTTP_REFERRER']); // не работает в данном коде

        // булевы значения + операторы сравнения
        echo "a:['True']<br>";
        echo "b:['False']<br>";
        echo "c:[".(20>9)."]<br>"; // покажет 1
        echo "d:[".(20<9)."]<br>"; // ничего не покажет
        echo "<br>";

        // операторы равенства
        $a = 1000;
        $b = +1000;
        // if($a == $b) echo "1"; echo "<br>";
        // if($a === $b) echo "2";
        if($a != $b) echo "1"; 
        else echo "2";
        echo "<br>";

        // логические переменные
        $c = 1;
        $d = 0;
        echo ($c AND $d)."<br>"; // нужно чтобы оба операторы были истинными, поэтому ничего не будет при выводе
        echo ($c OR $d)."<br>"; // одно из значений истинно
        echo ($c XOR $d)."<br>";
        echo !$c."<br>"; // логическое НЕ, поэтому TRUE (1) становится FALSE (0)

        // инструкция if
        $string = 100;
        $numbers = 0;
        if ($string > $numbers) {
            echo ($numbers+=1)."<br>";
        }

        // инструкция else
        $string = 100;
        $numbers = 0;
        if ($string < $numbers) {
            echo ($numbers+=1)."<br>";
        } else {
            echo "Ошибка"."<br>";
        }

        // инструкция elseif
        $string = 100;
        $numbers = 0;
        if ($string < $numbers) {
            echo ($numbers+=1)."<br>";
        } elseif ($string == 100) {
            echo "Here's 100";
        } else {
            echo "Ошибка"."<br>";
        }
        echo "<br>";

        // взамен if...elseif можно использовать конструкция switch\case\break
        $page = 13;
        switch ($page) {
            case "1":
                echo "Один";
                break;
            case "2":
                echo "Два";
                break;
            case "3":
                echo "Три";
                break;
            
        // команда по-умолчанию, когда ничего не подошло
            default:
                echo "Ничего не нашёл";
                break; // в данном случае, break необязателен, тк на нём всё закончится, но было бы нужно, если бы после него шли вырианты case
        }
        echo "<br>";

        // альтернативный синтаксим switch
        switch ($page): 
            case "1":
                echo "Один";
                break;
            default:
                echo "Ничего не нашёл_2";
                break; // в данном случае, break необязателен, тк на нём всё закончится, но было бы нужно, если бы после него шли вырианты case
        endswitch;
        echo "<br>";

        // использование оператора ?
        $fuel = 1;
        $result =  $fuel > 1 ? "Ок" : "Not";
        echo $result;
        echo "<br>";

        // конструкция while
        $r = 10;
        while ($r < 15) {
            echo "Ok"."\n";
            ++$r;
        }
        echo "<br>";

        $q = 1;
        while ($q <= 15) {
            echo $q."\n";
            ++$q;
        }

        // конструкция do ... while
        $u = 1;
        do {
            echo $u++."<br>";
        } while (
            $u <= 10
        );
        echo "<br>";

        // инструкция for
        for (
            $count = 1; // выражение инициализации
            $count <= 12; // выражение условия
            ++$count // выражение модификации
        ) {
            echo $count;
            echo "<br>";
        }
        echo "END"."<br>";

        for (
            $i = 1, $j = 1;
            $i + $j < 10;
            $i++, $j++
        ) {
            echo $i."<br>".$j;
        }

        // цикл for можно прекратить с помощью break
        $fp = fopen("./exapmle.txt", 'wb');

        for ($i = 0; $i <= 100; ++$i) {
            $fw = fwrite($fp, "Word\n");
            if ($fw == FALSE) break;
        }

        fclose($fp);
        echo "<hr>";

        $con = 10;

        while ($con > -10) {
            $con--;
            if ($con == 0) continue; // когда пункт деления на 0, то происходит пропуск этого деления
            echo (10 / $con)."<br>";
        }
        echo "<hr>";

        // явное преобразование типов
        $a = 10;
        $b = 3;
        $c = (int)($a / $b); // должно получиться 3.33, а при преобразовании его к целому числу просто 3
        echo $c;
        echo "<hr>";

        // функции
        // phpinfo(); // выводит инфо об установке php. Тк инфо очень много скрыто. Рекомендация убирать с сайта от щлоумышленников

        echo strrev("!olleH").'<br>'; // конвертирует слово в обратном направлении
        echo str_repeat('str', 3).'<br>'; // повторение str 3 раза
        echo strtoupper('eee').'<br>'; // русские буквы в верхний регистр не подымает
        echo strtolower("WORD").'<br>'; // перевод в нижний регистр
        echo "<hr>";

        $word_fix = ucfirst("change first word in upper"); // перевод в верхний регистр 1 буквы предложения, русский не работает
        echo $word_fix;
        echo "<hr>";

        // возвращение массива
        $names = fix_name("Anton", "Sasha", "Yulia");

        function fix_name($n1,$n2,$n3) {
            echo $n1." ".$n2." ".$n3;
        }
        echo "<hr>";    

        // создание ссылки с помощью &
        $name_1 = 'Anton';
        $name_2 = 'Ilya';
        $name_3 = 'Pety';
        // echo $name_1." ".$name_2." ".$name_3; // строка работает, пропуск, чтобы не мешала
        echo "<hr>";

        fix_name_2($name_1, $name_2, $name_3);

        function fix_name_2(&$n1, &$n2, &$n3){
            echo $n1." ".$n2." ".$n3;
        }
        echo "<hr>";

        // работа с глобальной переменной
        $global_a = "A";
        $global_b = "B";
        $global_c = "C";

        fix_name_3($global_a, $global_b, $global_c);

        function fix_name_3() {
            global $global_a; echo $$global_a = strtolower($global_a)."<br>";
            global $global_b; echo $global_b = strtolower($global_b)."<br>";
            global $global_c; echo $global_c = strtolower($global_c)."<br>";
        }
        echo "<hr>";

        // использование include (включить) и include_once. Будут сделана одна попытка поиска файла
        include "./hello_page.php";
        echo "Вверху строчка с использованием функции include";
        // фунция include_once нужна, чтобы не было повторного переиспользования функции, когда, например, функция,
        // которую мы вызвали содержится в другой функции, которую мы вызываем
        // Рекомендация: пользоваться только include_once для отсутсвия повторов
        echo "<hr>";

        // использование require and require_once. Если файл не будет найдет, то прогорамма не будет выполняться
        require_once "./goodbye_page.php";
        echo "Вверху строка с require_once";
        echo "<hr>";
        // Рекомендация: пользоваться только require_once для отсутсвия повторов

        // проверка существования функции с помощью function_exist
        if (function_exists("fix_name_3")) {
            echo "Существует";
        } else {
            echo "Не существует";
        }
        echo "<hr>";

        // использование классов
        $object = new User; // с помощью new происходит создание объекта, также сюда можно ("добавить", "аргументы")
        print_r($object); // _r нужна, чтобы был в более "читабельном" виде

        class User {
            public $name, $password; // функции доступны отовсюду

            function save_user () {
                echo "Код"."<br>";
            }
        }
        echo "<br>";

        // доступ к файлам
        $object->name = "Anton";
        $object->password = "123456";
        $object->save_user();
        print_r($object);

        echo "<hr>";

        // Клонирование объектов. Используем clone, чтобы переменная не повторялась.
        $object1 = new User();
        $object1->name = 'Lily';
        $object2 = clone $object1;
        $object2->name = 'Jo';

        echo "object1 name = ".$object1->name."<br>";  // в кавычках указываем текст, который будет выводиться, а не переменную
        echo "object2 name = ".$object2->name;  // в кавычках указываем текст, который будет выводиться, а не переменную


        // Конструктор. Когда нужно добавить классу некоторые аргументы
        class Abon {
            // установление аргументов в PHP 5 принято с __
            function __construct ($param1, $param2) { 
                $param1 = "Параметр 1";
                $param2 = "Параметр 2";
            }
        }

        // Деструкторы. Вызывается, когда сценарий подошёл к концу или функция выполняется в последний раз
        class Abon_2 {
            // установление аргументов в PHP 5 принято с __
            function __destruct () { 
                // коде деструктора
            }
        }

        echo "<hr>";

        // Написание методов. Метод $this для доступа к свойству текущего объекта
        class Person {
            public $name, $password;

            function get_password() {
                return $this->password;
            }
            function get_name() {
                return $this->name;
            }
        }

        $object4 = new Person();
        $object4->name = "yoo";
        $object4->password = "yoola";
        $pass_w = $object4->get_password();
        $name_w = $object4->get_name();

        print_r("Логин пользователя 4: ".$pass_w);
        echo "<br>";
        print_r("Пароль пользователя 4: ".$name_w);

        echo "<hr>";

        // статические методы доступные только для самого класса, а не объектов, которые внутри них
        Person_2 :: pwd_sting ();
        
        class Person_2 {
            static function pwd_sting() {
                echo "Введите что-нибудь";
            }
        }

        echo "<hr>";

        // объявление свойств: явное - происходит непосредственно внутри класса, неявное - просиходит в самом объекте. Явное объявление
        // в апрактике лучше.
        // class Test
        // {
        //     public $name = "Paul Smith"; // Допустимое
        //     public $age = 42; // Допустимое
            // public $time = time(); // Недопустимое — вызывает функцию
            // public $score = $level * 2; // Недопустимое — использует выражение
        // }

        // объяление констант. с помощью self мы можем напрямую обращаться к константам, используя ::
        Translate::lookup();
        class Translate
        {
            const ENGLISH = 0;
            const SPANISH = 1;
            const FRENCH = 2;
            const GERMAN = 3;
            const RUSSIA = 4;
        // ...
            Static function lookup()
            {
                echo self::SPANISH."<br>";
                echo self::RUSSIA;
            }
        }
        
        echo "<hr>";

        // области видимости
        class Example {
            /* открытиые */
            var $one = 1; // не рекомендуется, т.к. является старой
            public $one_2 = "1_1"; // рекомендуется
            protected $two = 2; // защищенная
            private function example_2 () {
                echo "Пример защищенной функции";
            }
        }

        echo "<hr>";
        
        $date = new Tester();
        echo "Test A: ".Tester::$static_frase."<br>";
        echo "Test B: ".$date->get_frase()."<br>";
        echo "Test C: ".$date->static_frase."<br>";

        class Tester {
            static $static_frase = "Статическое свойство";

            function get_frase() {
                return self::$static_frase;
            }
        }

        echo "<hr>";

        // наследование с помощью extends, которая дополняет класс данными из другого класса
        $chel = new Info();
        $chel->name = "Anton";
        $chel->city = "Rostov";
        $chel->email = "@yandex.cru";
        $chel->phone = "999";
        $chel->display();

        class Per {
            public $name, $city;

            function save() {
                echo "Save";
            }
        }

        class Info extends Per {
            public $email, $phone;

            function display() {
                echo "Name: ".$this->name."<br>";
                echo "City: ".$this->city."<br>";
                echo "Email: ".$this->email."<br>";
                echo "Phone number: ".$this->phone."<br>";
            }

        }

        echo "<hr>";

        // родительский класс parent
        $object = new Son;
        $object->test();
        $object->test2();

        class Dad {
            function test()
            {
                echo "[Class Dad] Я твой отец<br>";
            }
        }

        class Son extends Dad {
            function test() {
                echo "[Class Son] Я Лука<br>";
            }

            function test2() {
                // выводим на экран функцию из родительского класса, который "extends Dad"
                parent::test(); 
            }
        }

        echo "<hr>";

        // констукторы подкласса
        $object = new Tiger();
        echo "У тигров есть...<br>";
        echo "Мех: " . $object->fur . "<br>";
        echo "Полосы: " . $object->stripes;

        class Wildcat {
            public $fur; // У диких кошек есть мех
            function __construct() {
                $this->fur = "TRUE";
            }
        }

        class Tiger extends Wildcat {
            public $stripes; // У тигров есть полосы
            function __construct() {
                parent::__construct(); // Первоочередной вызов родительского
                // конструктора
                $this->stripes = "TRUE";
            }
        }

        echo "<hr>";

    ?>
</body>
</html>