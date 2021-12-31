<?php
/*function calculatorCum ($a, $d) {
    return $a + $d;
}
echo calculatorCum(7, 3);*/
/*function test ($a, $d, $c, $s = 2) {
    echo $a . ' ' . $d . ' ' . $c . ' ' . $s . PHP_EOL;
}
test(1, 2, 3);*/
/*$supportedOperators = ['+', '-', '*'];
function calculatorOperations (int $a, int $d, string $operations = '+') : int {
    if ($operations == '+'){
        return $a + $d;
    } elseif ($operations == '-') {
        return $a - $d;
    }elseif ($operations == '*'){
        return $a * $d;
    }
}
function parseOperator ($userInput, $operator) {
    $parseResult = explode($operator, $userInput);
    if ($parseResult && count($parseResult) == 2){
        return ['operators' => $parseResult, 'operator' => $operator];
    }
    return false;
}
do {
    $userInput = readline('Введите значение: '); // 7+2
    foreach ($supportedOperators as $operator){
        $parseResult = parseOperator($operator, $userInput);
        if ($parseResult) {
            echo 'Результат = ' . calculatorOperations(intval ($parseResult['operators'][0]), intval( $parseResult['operators'][1]), $parseResult['operator']);
        }

    }
} while(true);*/
/*function isValidNumber($n) {
    return $n % 3 === 0;

}
function display ($n, $isValidNumber) {
    if ($isValidNumber) {
        echo 'Число ' . $n . ' делиться на 3 ' . PHP_EOL;
    } else {
        echo 'Число ' . $n . ' не делиться на 3 ' . PHP_EOL;
    }
}
for ($i = 1; $i <= 100; $i++){
   display($i, isValidNumber($i));
}*/
/*function display (string $str, int $n) {
    for ($i = 0; $i < $n; $i++){
        echo $str . PHP_EOL;
    }
}
display('hello world', 3);*/
/*function displayString( string $str, int $n) : void //не возвращает значение return
{
    for ($i = 0; $i < $n; $i++){
        echo $str . PHP_EOL;
    }
    return true;
}
displayString('Привет мир!', 3);*/
/*function displayString( string $str, int $n) : array
{
    $resultArray = [];
    for ($i = 0; $i < $n; $i++){
       $resultArray[$i] =  $str;
    }
    return $resultArray;
}
$resultArray = displayString('Привет мир!', 3); // в глобальное виденье
foreach ($resultArray as $result) {
   echo $result . PHP_EOL;
}*/
/*$numbersArray = [2, 3, 5, 4, 10, 8, 0, 6]; //передача по ссылке, по значению работать не будет.
$elementsNumbers = count($numbersArray);
function truncArray (&$numbersArray, $elementsNumbers) {
    for ($i = 0; $i < $elementsNumbers; $i++) {
        if ($i % 2 !==0 ){
            unset($numbersArray[$i]);
        }
    }
}
truncArray($numbersArray, $elementsNumbers);
print_r($numbersArray);*/
$supportedOperators = ['+', '-', '*'];
function calculatorOperations (int $a, int $d, string $operation = '+') : int
{
    if ($operation == '+') {
        return $a + $d;
    } elseif ($operation == '-') {
        return $a - $d;
    } elseif ($operation == '*') {
        return $a * $d;
    }
}
function parseOperator ($userInput, $operator) {
    $parseResult = explode($operator, $userInput);
    if ($parseResult && count($parseResult) == 2){
        return ['operators' => $parseResult, 'operator' => $operator];
    }
    return false;
}
do {
    $userInput = readline('Введите значение: '); // 7+2
    foreach ($supportedOperators as $operator){
        $parseResult = parseOperator($userInput, $operator);
        if ($parseResult) {
            echo 'Результат = ' . calculatorOperations(intval ($parseResult['operators'][0]), intval( $parseResult['operators'][1]), $parseResult['operator']);
        }

    }
} while(true);