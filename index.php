<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/form.html" rel="" >
    <title>Document</title>
</head>
<body>
    <?php
    //находит неинициализированные переменные со значением Notice
    // тогда переменная будет иметь тип данных null
    // ini_set('error_reporting', E_ALL);
    // unset(); удаляет переменне и масивы. Может применяться при освобождении ячеек памяти, для увелечении скорости.
    // isset() empty() для проверки существования переменной. Отрицательное и положительное значение. 
    // empty() если нет переменной, пустая строка, "0", null, false, = true 

    // классы и объекты
    // public, private, protected - модификаторы доступа.
    // public : к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы
    // protected : свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников
    // private : свойства и методы с данным модификатором доступны только из текущего класса
    // public используется для создания области видимости переменных

// Статические переменные класса

// class Animal{
//     public static $animal = "Млекопитающие";
//     public static $view = "травоядное";
//     public $color = "waite";
//     public $age = 10;
//     public $speed = 5;
// }

// Объект
// $cow = new Animal();
// $cow->color = "waite";
// $cow->age = 5;
// $cow->speed = 10;

// $horse = new Animal();
// $horse->color = "brown";
// $horse->age = 10;
// $horse->speed = 30;

// $goat = new Animal();
// $goat->color = "waite";
// $goat->speed = 7;

// $cow_2 = clone $cow;

// echo $cow_2->speed;
// echo $cow_2->age;


// echo Animal::$view;
// echo Animal::$animal;
// echo $horse->speed;
// echo $horse->age;
// echo $horse->color;


// echo Animal::$view;
// echo Animal::$animal;
// echo $goat->speed;
// echo $goat->age;
// echo $goat->color;

// Константы - не отличаются от переменных, поэтому записываются в верхнем регистре.
// Константа не может быть переопределена
// define('PI', 'значение');

// defined(PI); проверяет наличие константы

//require_once 'utilits/second.php'; // Относительный путь
//require_once 'D:/php/utilits/second.php'; // Абсолютный путь
// require_once __DIR__ . '/utilits/second.php';
// echo "Это файл Index.php" . "<br>";

// Константы класса

// class ConstantClass{
// 	const NAME = "const";
// }
// //defined(name)
// //echo ConstantClass::NAME;

// if(defined('ConstantClass::NAME1')){
// 	echo 'Константа определена <br>';
// }
// else{
// 	echo 'Константа не определена <br>';
// }




// Массивы

// $year = [2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014,2015, 2016,2017,2018,2019,2020];

// $month = ["January", "february", "March", "april"," May", "June", "July", "august", "september", "November", "december"];

// $day = ["Monday","tuesday","Wednesday","Thursday","friday","Saturday","sunday"];

// echo $year[4] . " " . $month[4] . " " . $day[4] . "<br>";
// echo $year[count($year) - 1] . " " . $month[count($month) - 1] . " " . $day[count($day) - 1];

// ассоциотивные Массивы

// $arr = [ "name" => "Andrei", "age" => 31];
// echo $arr["age"];

// многомерные массивы

// $people = [
//     "Ivan" => ["age" => 21, "weight" => 63],
//     "Oleg" => ["age" => 25, "weight" => 70],
//     "Nika" => ["age" => 19, "weight" => 50]
// ];


// echo $people["Ivan"]["weight"];

// echo "<pre>";
// print_r($people);
// echo "</pre>";

// интерполяция элементов массива
// $people["Ivan"]["weight"];
// echo "Ивану {$people['Ivan']['weight']} лет";

// Обход массива
// $arr = [1, 2, 3];

// for ($i=0; $i < count($arr); $i++) {
//     echo $arr[$i] . "<br>";
// };

// $andrei = [
//     'name' => 'Andrei',
//     'age' => 31,
//     'weight' => 73 
// ];
  
// foreach($andrei as $key => $value) {
//     echo $key . "-" . $value . "<br>" ;
// }

// foreach($andrei as $val) {
//     echo $val . "<br>" ;
// } 

// $year = [2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];

// $month = ["January", "february", "March", "april"," May", "June", "July", "august", "september", "November", "december"];

// $day = ["Monday","tuesday","Wednesday","Thursday","friday","Saturday","sunday"];

// for ($i=0; $i < count($year); $i++) {
//         echo $year[$i] . "<br>";
//     };

// $time = [

//     "year" => [2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020],

//     "month" => ["January", "february", "March", "april"," May", "June", "July", "august", "september", "November", "december"],

//     "day" => ["Monday","tuesday","Wednesday","Thursday","friday","Saturday","sunday"]
// ];

// foreach($time as $value) {
//     foreach($value as $elem) {
//         echo $elem . '<br>';
//     }
//     } 

// Слияние массивов
// $arr1 = ["my", "text"];
// $arr2 = ["my2", "text3", "text4"];

// $sum = array_merge($arr1, $arr2);

// echo "<pre>";
// print_r($sum);
// echo "</pre>";

// сравнение массивов

// $a1 = [1, 3, 5, 7, 9];
// $a2 = [1, 3, 5, '7', 9];
// $a3 = [1, 3, 5, 7];
// $a4 = [1, 3, 4, 7, 9];


// if ($a1 == $a2) {
// 	echo "Массивы равны<br>";
// }else{
// 	echo "Массивы не равны<br>";
// }

// if ($a1 == $a3) {
// 	echo "Массивы равны<br>";
// }else{
// 	echo "Массивы не равны<br>";
// }
// // ===
// $arr11 = [0 => 1, 1 => 2];
// $arr22 = [0 => 1, 1 => '2'];
// if ($arr11 === $arr22) {
// 	echo "Массивы равны<br>";
// }else{
// 	echo "Массивы не равны<br>";
// }

// существование массивов

// isset()
// for ($i=0; $i <= 6; $i++) { 
// 	if (isset($a1[$i])) {
// 		echo "Элемент массива \$a1[$i] существует<br>";
// 	}else{
// 		echo "Элемент массива \$a1[$i] не существует<br>";
// 	}
// }

// is_array()
// if (is_array($arr222)) {
// 	echo "переменная \$arr22 является массивом<br>";
// }else{
// 	echo "переменная \$arr22 не является массивом<br>";}

// in_array() ===
// if (in_array(7, $a2, true)) {
// 	echo "цифра 7 существует внутри массива";
// }else{
// 	echo "цифра 7 не существует внутри массива";
// }

// удаление элементов массива unset()
//unset($a2); - удалить весь массив
// unset($a2[2]);
// echo "<pre>";
// print_r($a2);
// echo "</pre>";

// случайный элемент массива
// $arr = [1, 2, 3, 4, 5, 6];
// echo array_rand($arr);

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
// $arr2 = [];
// for ($i=0; $i <= count($arr); $i++) { 
// 		if (($i % 2) == 0){
//             $arr2[] = $i;
//         };
// echo "<pre>";
// print_r($arr2);
// echo "</pre>";
            
// 	};

// require_once __DIR__ . "/utilits/second.php";

// Операторы 
// % деление с остататком 

// Переписать логику так, чтобы:
//     Если число четное добавляем к нему 10 и выводим на экран
//     Если число нечетное отнимаем 1 и выводим на экран!

// $number = 122;
// if ($number % 2) {
//     $number = $number - 1;
// 	echo "Число в переменной: $number не четное";
// }else{
//     $number = $number + 10;
// 	echo "Число в переменной: $number четное";
// }

// $var1 = 1;
// $var2 = 11;
// Префиксная форма
//echo ++$var1 . "<br>";

// постфиксная форма
// echo $var2++ . "<br>";
// echo $var2 . "<br>";

// $abc = "bbb";
// echo ++$abc; //1bbb bbb1

// Включает фаил txt в код
// If (file_get_contents("some/file.txt")) {
//     $content = file_get_contents("some/file.txt");   
// }
// echo $contents;

// Условный оператор
// X ? y : z
// выражение1 ? выражение2 : выражение3

// $x = -13;
// $x = $x > 0 ? $x = 11 : $x; тернарный оператор

// создает фаил, заисывает содержимое и выводит на экран
// $contents = 'hello.txt';

// $current = "Hello, world!\n";

// file_put_contents($contents, $current);

// $content = file_get_contents("hello.txt"); 

// echo $content;

// оператор сравнения
// $variable1 = 20;
// $variable2 = 16;
// $variable3 = 19;

// if ($variable1 > $variable2){
//     echo "первая переменная больше второй\n";
//     if ($variable1 > $variable3)
//         echo "и третей<br>";
// }
// else {
//     echo "первая переменная меньше всех<br>";
// }



// переключатель switch

// $someText = 'okey';
// switch ($someText) {
// 	case 'value':
// 		echo 'Выражение равно okey-2';
// 		break;

// 	case 'okey':
// 		echo 'Выражение равно okey';
// 		break;
	
// 	default:
// 		echo 'Выражение не равно okey';
// 		break;
// }

// if($someText == 'okey'){
// 	echo 'Выражение равно okey-2';
// } elseif ($someText == 'value') {
// 	echo 'Выражение равно okey';
// } else {
// 	echo 'Выражение не равно okey';
// }


// $num = 100;

// switch (true) {
// 	case ($num > 0 && $num <= 50):
// 		echo "true";
// 		break;
	
// 	case ($num > 0 && $num <= 500):
// 		echo "true-2";
// 		break;

// 	default:
// 		echo "false";
// 		break;
// }

// Оператор goto
// begin:finish это уникальные метки. могут записываться по разному
// $nums = 1;

// begin:
// $nums++;
// echo "$nums<br>";
// if ($nums >= 22) goto finish;
// goto begin;
// finish:

// $flag1 = true;
// $flag2 = false;

// if ($flag1 and $flag2) {
// 	echo "<p>Оба флага возвращают true</p>";
// }else{
// 	echo "<p>Один или оба флага возвращают false</p>";
// }

// или 

// switch (true) {
//     case ($flag1 and $flag2):
//     	echo "<p>Оба флага возвращают true</p>";
//     	break;
// default:
// 		echo "<p>Один или оба флага возвращают false</p>";
// 		break;
// }
        
// цикл while

// while (true) {
//     // 	$i++;
//     // 	// здесь будет условие выхода из цикла
//     // 	if ($i > 20) break;
//     // 	echo "$i <br>";
//     // }

// for ($i=0; $i < 30; $i++) { 
//     echo '$i <br>';
// }

// $fib = 1;

// for ($i=1; $i < 55; $i+=$i) { 
//     echo "$i <br>";
// } 

// Числа фибоначи
// $n = 0;
// $n1 = 1;
// $n2 = 0;
// for($i = 1; $i <= 10; $i++){
//     echo $n.'<br>';
//     $n=$n1+$n2;
//     $n1=$n2;
//     $n2=$n;
// }

// function myFunc($col1, $col2){
//     $sum=$col1+$col2;
//     return $sum;
// }

// function myFunc1($col1, $col2){
//     $sum=$col1-$col2;
//     return $sum;
// }

// function myFunc2($col1, $col2){
//     $sum=$col1*$col2;
//     return $sum;
// }

// function myFunc3($col1, $col2){
//     $sum=$col1/$col2;
//     return $sum;
// }

// function myFunc4($col1){
//     $sum=$col1+$col1;
//     $sum=$sum*2;
//     $sum=$sum/4;
//     return $sum;
// }

// функция с датой
// $tim = date('20:00'); 
// $nam = 'Саша';

// function myFunc5($time, $name){
//     if ($time >= date('22:00') or $time <= date('06:00')){
//         echo "Доброй ночи $name";
//     }elseif ($time >= date('06:01') or $time <= date('16:00')){
//         echo "Добрый день $name";
//     }elseif ($time >= date('16:01') or $time <= date('21:59')){
//         echo "добрый вечер $name";
//     }
    
// }

// echo myFunc5($tim, $nam)

// echo date('m-d H:i:s', strtotime('last Monday'));
// $a = 123;
// $b = 321;
// echo myFunc($a, $b) . "<br>";
// echo myFunc1($a, $b) . "<br>";
// echo myFunc2($a, $b). "<br>";
// echo myFunc3($a, $b). "<br>";;
// echo myFunc4($a);

// параметры функций

// & - амперсант. Дает функции дополнительно привязывать дейсвия переменной на которую она ссылается

// Необязательные параметры
// function getResult($var1 = 2, $var2 = 4) {
// 	$var = $var1 * $var2;
// 	return $var;
// }

// echo getResult() . "<br>";
// echo getResult(3) . "<br>";
// echo getResult(5, 5);

// переменное (или изменяемое) количество параметров

// ... создает массив внутри функции

// function mylist(...$items){
// 	foreach ($items as $v) {
// 		echo $v . "<br>";
// 	}
// }

// //mylist('Nick', 'Mike', 'Sara', 'Andrei');

// $some =['PHP', 'Python', 'JS', 'HTML', 'CSS'];
// mylist(...$some);

// $friens = ['Стас', 'Денис', 'Даша', 'Сергей', 'Вова'];

// function HelloFriens(...$hello){
//     foreach ($hello as $frend) {
//         echo "Привет! $frend Ты мой хороший друг" . "<br>";
//     }
// }

// HelloFriens(...$friens);


// хотел сделать матиматическую операцию через массив(не получилось)
// function hiphop($one = 3, $two = 4, ...$combo){
//     $sum = $one . $combo . $two . "<br>";
//     return $sum;
// }

// $com['+', '-', '/', '*'];
// echo hiphop(3, 4, );


// Глобальные переменные

// global $var;
// $var 
// произойдет конфликт переменных если у них будут совпадать названия

// рекурсивные функции

// function recur($num){
	// Если параметр $num меньше 10, продолжаем рекурсию
	// if ($num > 10) {
		// Уменьшать значение параметра $num и его выводим в браузер
		// echo ($num--) . '<br>';
		// Производим рекурсивный вызов функции
// 		recur($num);
// 	}else return;
// }

// recur(15);

// если число больше 100 отнимаем каждый раз 5 и выводим через echo
// function recur2($num){
//     if ($num > 100){
//         echo ($num -= 5) . "<br>";
//         recur2($num);
//     }else return;    
// }

// recur2(155);

// факториал - произведение всех целых чисел, меньших или равных данному числу. n! = 1*2*3*4*5*......
// function factorial($num){
// 	if ($num <= 1) return 1;
// 	// здесь у нас происходит повторный вызов функции
// 	return $num * factorial($num - 1);
// }
// echo factorial(11);

// рекурсивная функция обхода многомерного массива

// function foo5($eee){	// создал функцию
//     foreach ($eee as $key => $value) { // создал цикл, который разбивает массив на ключ ($key) и значение ($value)
//             if (is_array($eee)) // написал условие1: если $array является массивом, то мы выполняем нижеследующее условие
//         {
//                 if (is_array($key)) // условие1: если $key (которая у нас раньше уже приняла значение ключа (через foreach) является массивом), то выполняется условие2
//             {
//                     foreach ($key as $keys => $valure) // условие2: цикл разбивает $key на ключ ($keys) и значение ($valure)
//                         print_r ($keys); // и выводит их как ключ и значение и между ними двоеточие
//                         echo " : ";
//                         print_r ($valure);
//                         echo '<br>';
//                         foo5($eee); // а потом все возвращается в начало функции
//             }else { //  сработает, если условие2 false
//                 print_r ($key);
//                 echo " : ";
//                 print_r ($value);
//                 echo '<br>';
//             }
//         } 
//     }
    
// }

// $people = [
//     "Ivan" => ["age" => 21, "weight" => 63],
//     "Oleg" => ["age" => 25, "weight" => 70],
//     "Nika" => ["age" => 19, "weight" => 50]
// ];

// foo5($people);

// вложенные функции

// $arr = [1, 2, 4];

// function box(){

// 	function inn(){
// 		echo "TEST";
// 	}
// 	inn();
// 	print_r($arr);
// }
// print_r()

// Динамическое имя функции

// function hello(){
	// return 'Hello';
// 	echo 'hello';
// }
// $var = hello();

// Анонимные функции
// $some = function (...$arr1){
// 	foreach($arr1 as $vel){
// 		echo $vel . '<br>';
// 	}
// };
// $some(12, 34, 53, 3465, 343);

// $var2 = function (){
// 	echo 'Запуск анонимной функции';
// };
// $var2(); 


// echo "<h2> Замыкания</h2>";

// $mess = 'текст до момента создания функции <br>';

// $test = function (array $some) use ($mess){
// 	if (isset($some) && count($some) > 0) {
// 		echo $mess;
// 		foreach($some as $li){
// 			echo $li . '<br>';
// 		}
// 	}
// };

// $test([]);
// $some[] = 'типа текст';
// $test($some);
// изменение окружения
// $mess = 'изменненный текст <br>';
// $mess = false;

// $some = [12, 32, 43, 53];
// $test($some);

// количество символов в строке
// $str = '   hello   -   people   
// 12';
// echo strlen($str) . '<br>';

// Поиск внутри строки
// echo substr($str, 1, 2) . '<br>';

// echo strpos($str, 'p') . '<br>';

// $text = "PHP - довольно простой - язык - программирования";

// echo substr($text, strpos($text, 'доволь')) . '<br>';


// замена текста внутри строки
// $textNew = str_replace("-", "=", $text);
// echo $textNew . '<br>';

// удаление пробелов и переносов
//  echo trim($str);


// Объединение и разбиение строк

// $str = 'Имя, Фамилия, email, mobile';
// Обрезает по символу
// $newArr = explode(',', $str);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// соединяет символами и создает строку
// $newStr = implode(';', $newArr);
// echo $newStr;

// Сериализация объектов и массивов
// serialize(value)
// unserialize(str)

// $num = [11, 2323, 423, 534, 54];

// кодирует массив
// $str = serialize($num);
// echo $str . "<br>";

// раскодирует строку
// $arr = unserialize($str);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// $school = [
//     "class1" => ["Вася", "Пупкин", "Женя" => "Свистунов", "Дима" => "Рябочкин", "Вова" => "Борисоль", "Петя" => "Пробкин", "Андрей" => "Филатов"],
//     "class2" => ["Вася Пупкин", "Женя Свистунов", "Дима Рябочкин", "Вова Борисоль", "Петя Пробкин", "Андрей Филатов"],
//     "class3" => ["Вася Пупкин", "Женя Свистунов", "Дима Рябочкин", "Вова Борисоль", "Петя Пробкин", "Андрей Филатов"]

// ];

// foreach ($school as $key => $value) {
//     $name = implode('-', $school["$key"]);
//     $lastName[$key] = $name;
// }
// echo "<pre>";
// print_r($lastName);
// echo "</pre>";

// foreach($time as $value) {
//     foreach($value as $elem) {
//         echo $elem . '<br>';
//     }
//     } 

// JSON кодировка
// echo '<h1>JSОN-формат</h1>';

// $arr = [
//   'fio' => 'Иванов Степан', 
//   'age' => '33', 
//   'vk_url' => 'https://vk.com/id11111',
//   'learn' => ['HTML', 'CSS', 'PHP']
// ];

// echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "<br>";

//json_decode(json) декодирует;
// $json = '{"people":"Сидоров Никита","adress":"Ленина 23б","mob":["0936326456","0977546412"]}';

// $arr2 = json_decode($json, true);

// echo '<pre>';
// print_r($arr2);
// echo '</pre>';

// передача параметров методом GET 


// echo "<a href='getform.php?text=" . urlencode('Привет, PHP!') . "'>ссылка</a>";

// parse_url(url)

// $url = "https://user:admin@site.com/page/index.php?id=12&value=val#author";

// $url = parse_url($url);

// echo '<pre>';
// print_r($url);
// echo '</pre>';


// укажет имя пользователя, пароль, дату и время.
// данные находятся в файле getform.php
// echo $_GET['user'];

// Array
// (
//     [scheme] => https префикс
//     [host] => site.com домен
//     [user] => user пользователь
    // port номер порта
//     [pass] => admin пароль
//     [path] => /page/index.php путь корневого каталога
//     [query] => id=12&value=val параметры id(?)
//     [fragment] => author фрагмент(#)
// )

// супер глобальные массивы 
// $_COOKIE - обеспечивает работу с куками
// $_SESSION - Массив для работы с сессиями
// $_REQUEST - хранит информацию при переходе между страницами
// $_SERVER - содержит информацию о скрепте и сервере
// $GLOBALS - все переменные всех глобальных массивов

//записываем куки 
// setcookie(getNameCookie(), getValueCookie());
// создаем функции "названия"... 
// function getNameCookie(){
    // если переменная имеет название Hello
    // if (isset($_COOKIE['Hello'])) {
        //составляем новое название "название+значение"
    //     return 'Hello' . getValueCookie();
    // }
    //иначе название просто "Hello" 
//     else {
//         return 'Hello';
//     }
// }
//...и "значения" 
// function getValueCookie(){
//проверяет если название не hello
    // if (!isset($_COOKIE['Hello'])) {
        // функция возвращает 0
    //     return 0;
    // }
    // функция возвращает + 1 к последнему элементу массива
//     return end($_COOKIE) + 1;
// }

// сётчик посещения страницы
// setcookie('test', plus());

// echo "Супер глобальные массивы";

// echo " Счетчик посещений сервера/страницы {$_COOKIE['test']}";

// function plus(){
// 	if (isset($_COOKIE['test'])) {
// 		$_COOKIE['test']++;
// 	}else{
// 		$_COOKIE['test'] = 1;
// 	}
// 	return $_COOKIE['test'];
// }

// удаляет сессию и все куки 
//запускаем ссесию вначале страницы
// session_start();
// проверяет настройки куки конкретной сессии
// if (ini_get("session.use_cookies")) {
    //переменая в которой будут содержаться куки данной сессии
    // $params = session_get_cookie_params();
    // создаем пустые атрибуты куки имя сессии, название кук, время 
//     setcookie(session_name(), '', time() - 42000,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );
// }
// сбрасывание куки должно происходить до всех параметров вывода echo, print_r и тд
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';


//обращаемся к методам внутри метода и переменным внутри метода
// class Family {
    //приватные переменные доступны только внутри класса
	// private $boy;
	// private $girl;
    //задаем имена boy и girl
    //создаем публичные функции
    //пробрасываем переменные 
	// public function setNameBoy($boy){
        // 1 переменная равна 2 переменной
	// 	$this->boy = $boy;
	// }
	// public function setNameGirl($girl){
	// 	$this->girl = $girl;
	// }

    //методы которые получают имена
	// public function getNameBoy(){
	// 	return $this->boy;
	// }
	// public function getNameGirl(){
	// 	return $this->girl;
	// }
    // метод который будет соединять имена
	// public function friend(){
        // применяем ранее подготовленые методы
// 		return $this->getNameGirl() . " и " . $this->getNameBoy() . " семья!";
// 	}
// }
// создаем экземпляр класса и присваиваем переменную
// $family = new Family;
//возникает возможность задать имена 
// $family->setNameBoy('Nick');
// $family->setNameGirl('Nina');
//применяем метод соединения имен
// echo $family->friend();

// class variable {
//     private $a;
//     private $b;

//     public function setNamevar_a($a){
// 		$this->a = $a;
// 	}
// 	public function setNamevar_b($b){
// 		$this->b = $b;
// 	}

//     public function getNamevar_a(){
// 		return $this->a;
// 	}
// 	public function getNamevar_b(){
// 		return $this->b;
// 	}

//     public function multiplication(){
//         return $this->getNamevar_a() * $this->getNamevar_b() . "<br>";
//     }

//     public function division(){
//         return $this->getNamevar_a() / $this->getNamevar_b() . "<br>";
//     }

//     public function addition(){
//         return $this->getNamevar_a() + $this->getNamevar_b() . "<br>";
//     }

//     public function clearing_var(){
//         unset($this->a);
//         unset($this->b);
//     }
// }


// $composition = new variable; 
// $composition->setNamevar_a(60);
// $composition->setNamevar_b(30);
// echo $composition->multiplication();
// echo $composition->division();
// echo $composition->addition();
// echo $composition->clearing_var();

// Ключевое слово self
// методы с маркером static работают быстрее в два раза

class Page{
	static $main = 'content<br>';

	public static function header(){
		return 'header<br>';
	}
	public static function footer(){
		return 'footer<br>';
	}

	public static function getPage(){
		echo 	self::header() .
				self::$main .
				self::footer();
	}
}
Page::getPage();

// this относится к текущему обьекту
// self относится к текущему класс
// class - это проект обьекта. Таким образом, вы определяете класс, но вы строите обьект
// this-> не может получить доступ к статическому методу или статическому атрибуту, мы используем self для доступа к ним
// this-> при работе с расширенным классом будет ссылаться на текущую область действия, которую расширил. 
// self всегда будет ссылаться на родительский класс, потому что ему не нужен экземпляр для доступа к методу класса или к его неосредственному доступу к классу


?>
<div class="container d-flex justify-betwen">
        <a href="index.php">index</a>
        <a href="arr.php">Массив</a>
        <a href="form_input.php">Форма</a>
        <a href="getform.php">GET форма</a>
        <a href="form_SERVER.php">Форма глобальных массивов</a>
    </div>
</body>
</html>