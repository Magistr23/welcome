<?php
$title = 'Заголовок';
$text = 'Текст';
$textStorage[] = array('Title' => $title, 'Text' => $text);
$userInput = readline(' ');
/*$userInput_title = readline(array_replace($textStorage[0]['Title']));*/
$userInput_text = array_replace($textStorage[0]);
function add ($userInput, &$textStorage) {
    $textStorage = (array_push($textStorage, $userInput));

}/*var_dump($textStorage[0]['Title'], $textStorage[0]['Text']);*/
/*var_dump($textStorage[0]);*/
print_r($textStorage[0]);
