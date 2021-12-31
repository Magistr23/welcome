<?php

/*$text = 'Хай';
echo $text;
$text1 = 'привет \'мир\'';
echo $text1;
$text2 = 'хей \ хай "123" ';
echo $text2;*/
/*$text = "привет \"мирок!\"";
echo $text;
$text1 = "хай \n хей";
echo $text1;
$a = 23;
$text2 = "\nПривет, мне $a";
echo $text2;
$text3 = <<<EOA
\nПривет! \n
Это строка была создана автоматом.
Создал это "кто-то"
EOA;
echo $text3;*/
/*$text = 'hello';
$text1 = "world";
$text2 = $text . $text1; добавление строк
echo $text2;
$text3 = 'хай';
$text3 .= 'ты кто';
echo $text3;*/
/*$text = 'hello';
$text1 = 'привет';
$text2 = mb_strlen($text1);
$text3 = strlen($text1); сколько букв в слове
var_dump($text, $text1, $text2, $text3);*/
/*$a = 'hello';
$d = $a[1];
//echo $d;
$x = $a[strlen($a) - 1];
//echo $x;
$c = $a[1] = 'E';
echo $a;*/
/*$a = 'World! hello';
$d = substr($a, 0, 7); //удаление слов
//echo $d;
$s = substr($a, 6);
//echo $s;
$e = substr($a, -7);
//echo $e;
$q = substr($a, 7, -3);
//echo $q;
$a = 'hello world';
$d = strpos($a, 'hello'); //искать где начинается
//var_dump($d);
$a = 'adc adc';
/*$d = strpos($a, 'adc', 2);
var_dump($d);*/
/*$d = strpos($a, 'ecd');
//var_dump($d);
$d = stripos($a, 'ADC'); //поиск без регистра
var_dump($d);*/
/*$a = 'Hello warld';
$d = str_ireplace('hello', 'Hi', $a); //замена нескольких букв str_ireplace
echo $d;*/
/*$a = 'abc abc';
$d = str_replace('abc', '123', $a, $c); //сколько раз было замен
echo $d;
var_dump($c);*/
/*$a = 'Hello World';
$d = strtolower($a); //замена регистра на меленькие
echo $d;
$c = strtoupper($a); //замена на большие
echo $c;*/
/*$a = '   Hello   ';
$d = trim($a); //удалить пробелы по бокам
//echo $d;
$c = rtrim($a); //без пробелов с права
//echo $c;
$s = "\n\nhello"; //удаление с лева
$q = ltrim($s);
echo $q;*/
/*$a[0] = 'Книги'; массивы
$a[1] = 'Фильмы';
$a[2] = 'Сериалы';
//echo $a[2];
$d[] = 'a';
$d[] = 'd';
$d[] = 'c';
echo $d[2];*/
/*$a['knigi'] = 'Книги';
$a['film'] = 'Фильмы';
$a['cerial'] = 'Сериалы';
echo $a['film'];*/
/*$a = [1, 2, 5, 10,];
//echo $a[2];
$d = ['knigi' => 'Книги', 'film' => 'Фильмы' , 'cerial' => 'Сериалы',];
//echo $d['film'];
$w = sizeof($a);
var_dump($w);
$q = count($d);
var_dump($q);*/
/*$a = 'Hello world';
$d = explode(' ', $a); //делит на массивы каждое слово
//var_dump($d);
$q = [1, 2, 7, 55,];
$s = implode(' ', $q); //соединяет из массива в строку
echo $s;*/
/*$a = [1, 2, 3]; // многомерный массив
$d = [4, 5, 6];
$s = [
    's1' => $a,
    's2' => $d,
    's3' => [7, 8, 9],
];
//var_dump($s['s3']);
//var_dump($s['s3'][0]);
$q = [
    'russia' => [
        'msk' => 'Москва',
        'cmol' => 'Смоленск'
    ],
    'germany' => [
        'berlin',
        'munchen',
    ],
];
var_dump($q['russia']['cmol']);*/
/*$a = [
    'a' => 'world a',
    'd' => 'world d',
    'c' => 'world c',
];
$d = array_keys($a); // подача ключей
//var_dump($a);
$c = array_values($a); // подача названий в ключах
//var_dump($c);
$q = [
    'a' => 'world a',
    'd' => 'world d',
];
$x = [
    'c' => 'world c',
    'z' => 'world z',
    'a' => 'world a2',
];
$w = array_merge($q, $x); // Объединение массивов c перезаписью похожих массивов
var_dump($w);*/
/*$a = ['a', 'd', 'c'];
$d = ['s', 'x', 'a'];
$c = array_merge($a, $d); // Объединение массивов без перезаписью похожих массивов
var_dump($c);*/
/*$a = [
    'a' => 'word a',
    'word d',
];
$d = [
    'c' => 'word c',
    'a' => 'word a2',
    'word v',
];
$x = array_merge($a, $d);
var_dump($x);*/
/*$a = ['a', 'd'];
$d = ['word a', 'word d'];
$c = array_combine($a, $d); // объединение из разныех массивов
var_dump($c);*/
/*$a =
    'a' => 'word a',
    'd' => 'word d',
    'c' => 'word a',
];
$d = array_flip($a); // Переместить из значения в ключи и наоборот
var_dump($d);*/
/*$a = ['a', 'd', 'c', 'z']; // перевернуть значения задом на перёд
$d = array_reverse($a);
var_dump($d);*/
/*$a = [
    'a' => 'word a',
    'd' => 'word d',
    'c' => 'word c',
];
$d = array_reverse($a);
var_dump($d);*/

/*$a = ['a', 'd', 'c', 'z'];
$d = array_reverse($a);
var_dump($d);
$c = array_reverse($a, true); //Перевернуть ключи с значениями
var_dump($c);*/
/*$a = ['a', 'd', 'c', 'z'];
//$d = in_array('d', $a); //поиск элементов по массиву
$c = array_search('d', $a); //поиск элементов по массиву но вывод ключа
var_dump($c);*/
/*$a = [
    'a' => 'word a',
    'd' => 'word d',
    'c' => 'word c',
];
$d = array_search('word c', $a);
var_dump($d);*/
/*$mystring = 'abcb';
$findme   = 'b';
$pos = strpos($mystring, $findme);
var_dump($pos);*/
$title = 'Заголовок';
$text = 'Текст';
$textStorage[] = array('Title' => $title, 'Text' => $text);
$userInput = readline(' ');
/*$userInput_title = readline(array_replace($textStorage[0]['Title']));*/
$userInput_text = array_replace($textStorage[0]);
function add ($userInput, &$textStorage) {
$textStorage = (array_push($textStorage, $userInput));

}/*var_dump($textStorage[0]['Title'], $textStorage[0]['Text']);*/
var_dump($textStorage[0]);
print_r($textStorage[0]);
