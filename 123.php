<?php
$supportedOperators = ['+', '-', '*'];
$calHistory = [];
function calculatorOperations (&$History, int $a, int $d, string $operation = '+') : int
{
    $History[] = $a . ' ' . $operation . ' ' . $d;
    if ($operation == '+') {
        return $a + $d;
    } elseif ($operation == '-') {
        return $a - $d;
    } elseif ($operation == '*') {
        return $a * $d;
    } return 0;
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
    if ($userInput == 'exit') {
        print_r($calHistory);
    }
    foreach ($supportedOperators as $operator){
        $parseResult = parseOperator($userInput, $operator);
        if ($parseResult) {
            echo 'Результат = ' . calculatorOperations( $calHistory, intval ($parseResult['operators'][0]), intval( $parseResult['operators'][1]), $parseResult['operator']);
        }

    }
} while(true);